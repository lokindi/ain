<div class="notice notice-error">
	<p>
		<?php esc_html_e('The Bot for Telegram on WooCommerce PRO plugin is no longer supported; all its features have been moved to the free version. Please disable it.', 'bot-for-telegram-on-woocommerce'); ?>
		<a href="<?php echo wp_nonce_url(admin_url('plugins.php?action=deactivate&plugin=bot-for-telegram-on-woocommerce-pro/bot-for-telegram-on-woocommerce-pro.php'), 'deactivate-plugin_bot-for-telegram-on-woocommerce-pro/bot-for-telegram-on-woocommerce-pro.php'); ?>">
			<?php esc_html_e('Deactivate plugin', 'bot-for-telegram-on-woocommerce'); ?>
		</a>
	</p>
</div>