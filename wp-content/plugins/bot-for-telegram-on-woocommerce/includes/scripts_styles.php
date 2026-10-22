<?php
function bftow_enqueue_admin_ss($hook)
{

    wp_enqueue_style('bftow_style', BFTOW_URL . '/assets/css/styles.css', false, BFTOW_PLUGIN_VERSION);
}

function bftow_enqueue_ss($hook) {
	$tg_login = bftow_get_option('enable_tg_login', false);
	$auto_tg_login = bftow_get_option('auto_tg_login', false);
	if(!$tg_login || !$auto_tg_login || is_user_logged_in()) {
		return false;
	}
	wp_enqueue_script('bftow_login', BFTOW_URL . '/assets/js/login.js', array('jquery'), BFTOW_PLUGIN_VERSION);

	$translation_array = array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'ajax_nonce' => wp_create_nonce('ajax_nonce'),
	);

	wp_localize_script('bftow_script', 'bftow_localize', $translation_array);
}

add_action('admin_enqueue_scripts', 'bftow_enqueue_admin_ss');
add_action('wp_enqueue_scripts', 'bftow_enqueue_ss');
