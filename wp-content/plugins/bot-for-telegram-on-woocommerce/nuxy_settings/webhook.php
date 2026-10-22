<?php

/**
 * @var $field
 * @var $field_id
 * @var $field_value
 * @var $field_label
 * @var $field_name
 * @var $section_name
 *
 */

wp_enqueue_script('nuxy_webhook', BFTOW_URL . '/assets/js/webhook.js', ['vue.js', 'jquery']);
wp_localize_script('nuxy_webhook', 'nuxy_webhook_data', [
	'ajax_url' => admin_url('admin-ajax.php'),
	'ajax_nonce' => wp_create_nonce('ajax_nonce'),
]);
?>

<bftow_webhook_activation inline-template>
    <div class="wpcfto_generic_field wpcfto_generic_field_flex_input wpcfto_generic_field__text">
        <div class="wpcfto-field-aside">
            <label class="wpcfto-field-aside__label"><?php esc_html_e('Activate API URL', 'bot-for-telegram-on-woocommerce'); ?></label>
            <div class="wpcfto-field-description wpcfto-field-description__before description"><?php esc_html_e('Save Bot token first', 'bot-for-telegram-on-woocommerce'); ?></div>
        </div>
        <div class="wpcfto-field-content">
            <div class="forminp">
                <a href="#" class="button-primary" id="bftow_activate_tg_api_url" @click.prevent="activate()">
                    <?php esc_html_e('Activate REST URL', 'bot-for-telegram-on-woocommerce'); ?>
                </a>
                <a href="#" class="button-secondary" id="bftow_deactivate_tg_api_url" @click.prevent="deactivate()">
                    <?php esc_html_e('Deactivate REST URL', 'bot-for-telegram-on-woocommerce'); ?>
                </a>
                <div id="wt-info-line"></div>
            </div>
        </div>
    </div>
</bftow_webhook_activation>