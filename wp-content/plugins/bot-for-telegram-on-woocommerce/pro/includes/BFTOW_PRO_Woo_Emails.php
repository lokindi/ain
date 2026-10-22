<?php
new BFTOW_PRO_Woo_Emails;

class BFTOW_PRO_Woo_Emails
{
    public function __construct()
    {
		add_action('woocommerce_email_settings_before', [$this, 'add_field']);
		add_action('woocommerce_update_options', [$this, 'save_settings']);
		add_action('woocommerce_email_sent', [$this, 'email_sent'], 10, 3);
    }


    public function add_field($email)
    {
        $enable_email = get_option('bftow_enable_email_' . $email->id, false);
    ?>
			<table class="form-table">
				<tr>
					<th scope="row" class="titledesc">
						<label for="bftow_enable_email"><?php esc_html_e('Enable/Disable for Telegram', 'bot-for-telegram-on-woocommerce'); ?></label>
					</th>
					<td class="forminp">
						<fieldset>
							<legend class="screen-reader-text"><span><?php esc_html_e('Enable/Disable for Telegram', 'bot-for-telegram-on-woocommerce'); ?></span></legend>
							<label for="bftow_enable_email">
								<input type="checkbox" id="bftow_enable_email" name="bftow_enable_email" <?php checked($enable_email); ?>/> <?php esc_html_e('Enable this email notification in Telegram', 'bot-for-telegram-on-woocommerce'); ?></label>
							<p><?php echo sprintf(
								/* translators: 1: template_plain template file, 2: template_plain template file */
								__('To override and edit this email template copy <code>woocommerce/templates/%1$s</code> to your theme folder <code>woocommerce/%2$s</code>', 'bot-for-telegram-on-woocommerce'), $email->template_plain, $email->template_plain
								); ?></p>
						</fieldset>
					</td>
				</tr>
				<?php if(!$email->is_customer_email()): ?>
				<?php
					$default_chat_id = get_option('bftow_notification_channel_id', '');
					$chat_id = get_option('bftow_chat_id_' . $email->id, $default_chat_id);
					$chat_id = $chat_id === 'no' ? '' : $chat_id;
					?>
					<tr>
						<th scope="row" class="titledesc">
							<label for="bftow_chat_id"><?php esc_html_e("Chat IDs (comma separated) or chat usernames (for public chats e.g @mychannel)", 'bot-for-telegram-on-woocommerce'); ?></label>
						</th>
						<td class="forminp">
							<fieldset>
								<legend class="screen-reader-text"><span><?php esc_html_e('Chat ID or chat username (for public chats e.g @mychannel)', 'bot-for-telegram-on-woocommerce'); ?></span></legend>
								<input type="text" id="bftow_enable_email" name="bftow_chat_id" value="<?php echo esc_attr($chat_id); ?>"/>
							</fieldset>
						</td>
					</tr>
				<?php endif; ?>
			</table>
		<input type="hidden" name="bftow_email_type" value="<?php echo esc_attr($email->id); ?>"/>
    <?php
    }

    public function save_settings()
	{
		if(!empty($_POST['bftow_email_type'])) {
			$type = esc_html($_POST['bftow_email_type']);
			$enable_email = get_option('bftow_enable_email_' . $type, false);
			$chat_id = get_option('bftow_chat_id_' . $type, false);
			$new_value = !empty($_POST['bftow_enable_email']);
			$new_chat_id = !empty($_POST['bftow_chat_id']) ? esc_html($_POST['bftow_chat_id']) : 'no';
			if($enable_email !== $new_value) {
				update_option('bftow_enable_email_' . $type, $new_value);
            }
            if($chat_id !== $new_chat_id) {
                update_option('bftow_chat_id_' . $type, $new_chat_id);
            }
        }
    }

    public function email_sent($return, $id, $email)
	{
		$email_enabled = get_option('bftow_enable_email_' . $id, false);
		
		if(empty($email_enabled)) return false;
        $BFTOW_Api = BFTOW_Api::getInstance();
        $message = $email->get_content_plain();
        $message = strip_tags($message, '<a><b><strong><i><code><s><strike><del><pre>');
		if($email->is_customer_email()) {
            $user_chat_id = '';
            $bftow_user = new BFTOW_User();
			if(!empty($email->object->get_id())) {
                $customer_id = get_post_meta($email->object->get_id(), '_customer_user', true);

                if(!empty($customer_id)){
                    $user_chat_id = $bftow_user->bftow_get_user_tg_chat_id($customer_id);
                }

			}
			else {
				$user = get_user_by('email', $email->get_recipient());
				if(!empty($user->ID)){
                    $user_chat_id = $bftow_user->bftow_get_user_tg_chat_id($user->ID);
                }
            }
            if(!empty($user_chat_id)) {
                $send_data = array(
                    'text' => $message,
                    'chat_id' => $user_chat_id,
                    'parse_mode' => 'html',
                    'disable_web_page_preview' => true,
                );

                $BFTOW_Api->send_message('sendMessage', $send_data);
            }
        }
		else {
            $chat_ids = get_option('bftow_chat_id_' . $id, '');
			if(empty($chat_ids) || $chat_ids === 'no') {
				$chat_ids = get_option('bftow_notification_channel_id', '');
			}
			if(!empty($chat_ids) && $chat_ids !== 'no'){
                $chat_ids = str_replace(' ', '', $chat_ids);
				if(!empty($email->object->get_id())){
					$order_id = $email->object->get_id();
					if(!empty($customer_id)){
						$customer_id = get_post_meta($order_id, '_customer_user', true);
						$address_from_location = get_user_meta($customer_id, 'bftow_formatted_address', true);
						if(!empty($address_from_location)) {
							$message .= "\n\n" . esc_html__('Address from location:', 'bot-for-telegram-on-woocommerce') . " {$address_from_location}\n";;
						}
					}
				}
                $chat_ids = explode(',', $chat_ids);

                foreach ($chat_ids as $chat_id) {
                    $send_data = array(
                        'text' => $message,
                        'chat_id' => $chat_id,
                        'parse_mode' => 'html',
                        'disable_web_page_preview' => true,
                    );
                    $BFTOW_Api->send_message('sendMessage', $send_data);
                }
            }
        }
    }
}
