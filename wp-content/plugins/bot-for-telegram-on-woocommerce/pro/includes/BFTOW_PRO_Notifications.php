<?php
new BFTOW_PRO_Notifications;

class BFTOW_PRO_Notifications
{
    protected $channel_id = '';

    public function __construct()
    {
        $this->channel_id = get_option('bftow_notification_channel_id', '');
        add_action('woocommerce_order_status_changed', [$this, 'order_status_changed'], 100, 4);
        add_action('bftow_update_user', [$this, 'user_updated'], 100, 3);
        add_action('wp_ajax_bftow_pro_action_get_channel_id', [$this, 'get_channel_id']);
    }

    public function order_status_changed($order_id, $status_from, $status_to, $order)
    {
		$notifications_enabled = bftow_get_option('bftow_enable_order_notifications', true);

		if(!$notifications_enabled) return;
        $is_sent = get_post_meta($order_id, 'bftow_pro_is_sent', true);

        if (!$is_sent) {
            $message = BFTOW_Orders::get_order_data($order_id, true);
            
            $seller_data = [
                'text' => $message,
                'chat_id' => $this->channel_id,
                'parse_mode' => 'html'
            ];

            $send_message = BFTOW_Api::getInstance()->send_message('sendMessage', $seller_data);
			if($send_message) {
				update_post_meta($order_id, 'bftow_pro_is_sent', true);
			}
        }
        else {
            $statuses = wc_get_order_statuses();
            $status = $order->post->post_status;
            $new_status = $statuses[$status];
			/* translators: 1: order id, 2: order status */
			$message = sprintf(esc_html__('Order #%1$s status changed to %2$s', 'bot-for-telegram-on-woocommerce'), $order_id, $new_status) . "\n";

            $seller_data = [
                'text' => $message,
                'chat_id' => $this->channel_id,
                'parse_mode' => 'html'
            ];

            BFTOW_Api::getInstance()->send_message('sendMessage', $seller_data);
        }
    }

    public function get_channel_id()
    {
		check_ajax_referer('ajax_nonce', 'security');
		if(!current_user_can('manage_options')){
			wp_send_json_error();
		}
        if(!empty($_POST['public_channel'])){
            $public_channel = esc_html($_POST['public_channel']);

            $customer_data = [
                'text' => esc_html__('Getting chat ID...', 'bot-for-telegram-on-woocommerce'),
                'chat_id' => $public_channel,
            ];
            $result = BFTOW_Api::getInstance()->send_message('sendMessage', $customer_data);

            $r = array(
                'message' => esc_html__('Error, please make sure you enter the correct public channel name', 'bot-for-telegram-on-woocommerce'),
                'status' => 'error'
            );
			
            if($result['ok'] && !empty($result['result']['chat']['id'])){
                $chat_id = esc_html($result['result']['chat']['id']);
                $r['chat_id'] = $chat_id;
                $r['status'] = 'success';
                $r['message'] = esc_html__('Success', 'bot-for-telegram-on-woocommerce');
				update_option('bftow_notification_public_channel_id', sanitize_text_field($public_channel));
				update_option('bftow_notification_channel_id', sanitize_text_field($chat_id));
            }
            wp_send_json($r);
        }
    }

    function user_updated($is_exists, $user_id, $display_name)
    {
        $notify = bftow_get_option('bftow_user_created_notification', true);
        if(!$is_exists && !empty($notify) && !empty($this->channel_id)){
            $message = sprintf(
			/* translators: 1: user id, 2: display name */
			esc_html__('New user registered via telegram bot. User ID - %1$s, User name - %2$s', 'bot-for-telegram-on-woocommerce'),
                $user_id,
                $display_name
            );
            $seller_data = [
                'text' => $message,
                'chat_id' => $this->channel_id,
            ];
            BFTOW_Api::getInstance()->send_message('sendMessage', $seller_data);
        }
    }
}