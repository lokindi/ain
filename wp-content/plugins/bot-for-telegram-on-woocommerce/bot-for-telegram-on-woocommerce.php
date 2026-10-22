<?php
/**
 * Plugin Name: Bot for Telegram on WooCommerce
 * Description: Bot for Telegram on WooCommerce is a plugin that allows you to create a telegram online store based on your website with WooCommerce.
 * Plugin URI:  https://wp-guruteam.com/woocommerce-telegram/
 * Version:     1.3.0
 * Author:      guru-team
 * Author URI:  https://wp-guruteam.com/
 * Text Domain: bot-for-telegram-on-woocommerce
 */
if (!defined('ABSPATH')) exit;

define( 'BFTOW_PLUGIN_VERSION', '1.3.0' );
define( 'BFTOW_FILE', __FILE__ );
define( 'BFTOW_DIR', dirname( BFTOW_FILE ) );
define( 'BFTOW_USER_DIR', dirname( BFTOW_FILE ) . '/user_actions/' );
define( 'BFTOW_URL', plugins_url( '/', BFTOW_FILE ) );
define( 'BFTOW_DEBUG', false);


require_once BFTOW_DIR . '/nuxy/NUXY.php';
require_once BFTOW_DIR . '/nuxy_settings/main.php';
require_once BFTOW_DIR . '/includes/scripts_styles.php';

function bftow_init()
{
    if(!class_exists( 'WooCommerce', false )) {
        add_action( 'admin_notices', function()
        {
            require_once BFTOW_DIR . '/includes/notices/install_woocommerce.php';
        } );

        return;
    }

    require_once BFTOW_DIR . '/includes/functions.php';

    require_once BFTOW_DIR . '/includes/BFTOW_Settings_Tab.php';
    require_once BFTOW_DIR . '/includes/BFTOW_User.php';
    require_once BFTOW_DIR . '/includes/BFTOW_Login.php';
    require_once BFTOW_DIR . '/includes/BFTOW_Api.php';
    require_once BFTOW_DIR . '/includes/BFTOW_Helpers.php';
    require_once BFTOW_DIR . '/includes/BFTOW_Product.php';
    require_once BFTOW_DIR . '/includes/BFTOW_Products.php';
    require_once BFTOW_DIR . '/includes/BFTOW_Orders.php';
    require_once BFTOW_DIR . '/includes/BFTOW_Telegram.php';
    require_once BFTOW_DIR . '/includes/BFTOW_WooCommerce.php';
    require_once BFTOW_DIR . '/includes/product_api/variable.php';
    require_once BFTOW_DIR . '/includes/notices/settings.php';
	if(!defined('BFTOW_PRO_DIR')){
		define('BFTOW_PRO_PLUGIN_VERSION', '1.0.6');
		define('BFTOW_PRO_DIR', BFTOW_DIR . '/pro/');
		define('BFTOW_PRO_URL', BFTOW_URL . '/pro/');
		define('BFTOW_DB_V', 1.9);
		require_once BFTOW_DIR . '/pro/includes/main.php';
	}
	else {
		add_action('admin_notices', function () {
			require_once BFTOW_DIR . '/includes/notices/disable_pro.php';
		});
	}
}

add_action( 'plugins_loaded', 'bftow_init', 20 );
