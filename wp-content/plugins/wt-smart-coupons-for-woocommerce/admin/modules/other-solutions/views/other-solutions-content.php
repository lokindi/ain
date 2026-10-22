<?php
/**
 * Other Solutions
 *
 * Category sidebar plus a card grid of the other WebToffee plugins.
 *
 * @link
 * @since 1.4.4
 * @since 2.3.1 Rebuilt around the category sidebar layout.
 *
 * @package  Wt_Smart_Coupon
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

$wt_sc_os_img = WT_SMARTCOUPON_MAIN_URL . 'admin/modules/other-solutions/assets/images';  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

/*
 * Card definitions, grouped by sidebar category.
 *
 * Per card:
 *   type         'standard' or 'standard-with-image' (the latter spans two grid columns).
 *   rating       A numeric score shown as a badge, or 'stars' for a five-star row.
 *   pro_plugin   Basename of the premium edition. When active the card is dropped.
 */
$wt_sc_os_categories = array(  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	'ecommerce-promotions' => array(
		'label'      => __( 'E-commerce Promotions', 'wt-smart-coupons-for-woocommerce' ),
		'subtitle'   => __( 'Create and run successful promotional campaigns with the best marketing tools for WooCommerce', 'wt-smart-coupons-for-woocommerce' ),
		'icon'       => 'sidebar-ecommerce-promotions.svg',
		'heroes'     => array(),
		'plugins'    => array(
			array(
				'type'       => 'standard',
				'name'       => __( 'Smart Coupons for WooCommerce', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'smart-coupons-plugin.png',
				'rating'     => '4.9',
				'features'   => array(
					__( 'Advanced BOGO Coupons', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Offer store credits', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Create attractive gift cards', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/smart-coupons-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=smart_coupons',
				'pro_plugin' => 'wt-smart-coupon-pro/wt-smart-coupon-pro.php',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'URL Coupons for WooCommerce', 'wt-smart-coupons-for-woocommerce' ),
				'icon'     => 'url-coupons-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Generate custom coupon URLs', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Set up a redirect page', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Automatically add products', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/url-coupons-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=URL_Coupons',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'WooCommerce Product Recommendations', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'product-recommendation-plugin.png',
				'rating'     => '5.0',
				'features'   => array(
					__( 'Automatically generate suggestions based on order history', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Display recommended products on the product pages', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Multiple product recommendation templates', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-product-recommendations/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Product_Recommendations',
				'pro_plugin' => 'wt-woocommerce-product-recommendations/wt-woocommerce-product-recommendations.php',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'WooCommerce Coupon Generator', 'wt-smart-coupons-for-woocommerce' ),
				'icon'     => 'coupon-generator-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Bulk generate WooCommerce coupons', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Bulk export WooCommerce coupons to CSV', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Add usage restrictions to coupons', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/woocommerce-coupon-generator/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Coupon_Generator',
			),
			array(
				'type'       => 'standard-with-image',
				'name'       => __( 'WooCommerce Gift Cards', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'gift-card-plugin.png',
				'rating'     => 'stars',
				'features'   => array(
					__( 'Create unlimited gift cards', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Email gift cards to customers', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Provide refunds to store credit', 'wt-smart-coupons-for-woocommerce' ),
					__( '20+ predefined gift card templates', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-gift-cards/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=WooCommerce_Gift_Cards',
				'image_src'  => 'gift-cards-illustration.png',
				'pro_plugin' => 'wt-woocommerce-gift-cards/wt-woocommerce-gift-cards.php',
			),
		),
		'bundle'     => array(
			'tag_emoji'    => '📣',
			'tag_color'    => 'yellow',
			'tag'          => __( 'Promotion Bundle', 'wt-smart-coupons-for-woocommerce' ),
			'title'        => __( 'WooCommerce Promotion Bundle', 'wt-smart-coupons-for-woocommerce' ),
			'url'          => 'https://www.webtoffee.com/woocommerce-promotions/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Promotion_Bundle',
			'desc'         => __( 'Make powerful promotional campaigns with our WooCommerce promotion bundle. Create coupon promotions, set up gift cards, and implement popular product recommendation strategies.', 'wt-smart-coupons-for-woocommerce' ),
			'pills'        => array(
				__( 'Smart Coupons', 'wt-smart-coupons-for-woocommerce' ),
				__( 'Product recommendation', 'wt-smart-coupons-for-woocommerce' ),
				__( 'Gift cards', 'wt-smart-coupons-for-woocommerce' ),
			),
			'price_orig'   => '$277',
			'price_sale'   => '$194',
			'savings'      => __( 'Save up to 30% off', 'wt-smart-coupons-for-woocommerce' ),
			'illustration' => 'promotion-bundle.png',
			// One entry per pill above. The bundle is dropped only once the store runs all three.
			'pro_plugin'   => array(
				'wt-smart-coupon-pro/wt-smart-coupon-pro.php',
				'wt-woocommerce-product-recommendations/wt-woocommerce-product-recommendations.php',
				'wt-woocommerce-gift-cards/wt-woocommerce-gift-cards.php',
			),
		),
		'standalone' => array(
			'name'       => __( 'ECommerce Marketing Automation App', 'wt-smart-coupons-for-woocommerce' ),
			'icon'       => 'ema-app-plugin.png',
			'desc'       => __( 'Create signup forms, popups, and automated email campaigns with pre-built workflow templates to capture leads, recover abandoned carts, and grow sales.', 'wt-smart-coupons-for-woocommerce' ),
			'screenshot' => 'ema-screenshot.svg',
			'cta_label'  => __( 'Sign Up For Free', 'wt-smart-coupons-for-woocommerce' ),
			'url'        => 'https://www.webtoffee.com/product/ecommerce-marketing-automation/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=EMA',
		),
	),
	'privacy-compliance'   => array(
		'label'      => __( 'Privacy Compliance', 'wt-smart-coupons-for-woocommerce' ),
		'subtitle'   => __( 'Ensure compliance with major cookie laws, including, GDPR, CCPA, LGPD, CNIL, and more.', 'wt-smart-coupons-for-woocommerce' ),
		'icon'       => 'sidebar-privacy-compliance.svg',
		'heroes'     => array(
			array(
				'name'       => __( 'GDPR Cookie Consent Plugin (CCPA Ready)', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'gdpr-plugin.png',
				'image'      => 'cookie-consent.svg',
				// The artwork carries its own tinted panel, so the card leaves the area white.
				'image_fit'  => 'contain',
				'desc'       => __( 'This Google-certified CMP lets you create a customizable cookie banner, manage user consent, and ensure global privacy compliance with automatic script blocking.', 'wt-smart-coupons-for-woocommerce' ),
				'features'   => array(),
				'url'        => 'https://www.webtoffee.com/product/gdpr-cookie-consent/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=GDPR',
				'pro_plugin' => 'webtoffee-gdpr-cookie-consent/webtoffee-cookie-consent.php',
			),
			array(
				'name'       => __( 'EU Order Withdrawal Button Plugin for WooCommerce', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'eu-withdrawal-plugin.svg',
				'image'      => 'eu-withdrawal-illustration.png',
				'panel_bg'   => '#D6EAFB',
				'image_fit'  => 'contain',
				'desc'       => '',
				'features'   => array(
					__( 'Add "Request Withdrawal" button to WooCommerce', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Supports guest withdrawal option', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Two-step confirmation to prevent errors', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Full or partial order withdrawal support', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Dedicated admin dashboard for all requests', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Send email confirmation to customers', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/eu-withdrawal-button/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=EU_Withdrawal_Button',
				'pro_plugin' => 'wt-eu-withdrawal-button/wt-eu-withdrawal-button.php',
			),
		),
		'plugins'    => array(),
		'bundle'     => array(),
		'standalone' => array(),
	),
	'data-import-export'   => array(
		'label'      => __( 'Data Import & Export', 'wt-smart-coupons-for-woocommerce' ),
		'subtitle'   => __( 'The best-in-class import, export, and migration solutions for your WooCommerce data', 'wt-smart-coupons-for-woocommerce' ),
		'icon'       => 'sidebar-data-import-export.svg',
		'heroes'     => array(),
		'plugins'    => array(
			array(
				'type'       => 'standard',
				'name'       => __( 'Product Import Export Plugin', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'product-ie-plugin.png',
				'rating'     => '4.9',
				'features'   => array(
					__( 'Supports Excel, XML, CSV and TSV file formats', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Schedule automated import and export', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Support for multiple product types', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/product-import-export-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Product_Import_Export',
				'pro_plugin' => 'wt-import-export-for-woo-product/wt-import-export-for-woo-product.php',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'Order, Coupon, Subscription Export Import', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'order-ie-plugin.png',
				'rating'     => '4.6',
				'features'   => array(
					__( 'Supports Excel, XML, CSV and TSV file formats', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Schedule automated import and export', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Email customers on order status change', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/order-import-export-plugin-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Order_Import_Export',
				'pro_plugin' => 'wt-import-export-for-woo-order/wt-import-export-for-woo-order.php',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'User Import Export Plugin', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'user-ie-plugin.png',
				'rating'     => '5.0',
				'features'   => array(
					__( 'Supports Excel, XML, CSV and TSV file formats', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Schedule automated import and export', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Customize and send emails to new users on import', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/wordpress-users-woocommerce-customers-import-export/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=User_Import_Export',
				'pro_plugin' => 'wt-import-export-for-woo-user/wt-import-export-for-woo-user.php',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'Product Feed & Sync Manager', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'product-feed-plugin.png',
				'rating'     => '5.0',
				'features'   => array(
					__( 'Generate WooCommerce product feeds for Google Shopping, Facebook Shop, and Instagram Shop', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Supports 25+ sales channels and marketplaces', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-product-feed/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=WooCommerce_Product_Feed',
				'pro_plugin' => 'webtoffee-product-feed-pro/webtoffee-product-feed-pro.php',
			),
			array(
				'type'       => 'standard-with-image',
				'name'       => __( 'Import Export Suite for WooCommerce', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'ie-suite-plugin.png',
				'rating'     => 'stars',
				'features'   => array(
					__( 'Import/export Products, Orders, Subscriptions, Coupons, Customers, WordPress Users, Categories & Tags, Reviews', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Supports Excel, XML, CSV and TSV file formats', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-import-export-suite/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Import_Export_Suite',
				'image_src'  => 'data-io-illustration.png',
				'pro_plugin' => array(
					'wt-import-export-for-woo-product/wt-import-export-for-woo-product.php',
					'wt-import-export-for-woo-user/wt-import-export-for-woo-user.php',
					'wt-import-export-for-woo-order/wt-import-export-for-woo-order.php',
				),
			),
		),
		'bundle'     => array(),
		'standalone' => array(),
	),
	'accounting-invoicing' => array(
		'label'      => __( 'Accounting & Invoicing', 'wt-smart-coupons-for-woocommerce' ),
		'subtitle'   => __( 'Automatically generate professional WooCommerce invoices and documents for all your orders', 'wt-smart-coupons-for-woocommerce' ),
		'icon'       => 'sidebar-accounting-invoicing.svg',
		'heroes'     => array(
			array(
				'name'       => __( 'PDF Invoices, Packing Slips, & Credit Notes', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'pdf-invoices-plugin.png',
				'image'      => 'pdf-invoices-screenshot.png',
				'panel_bg'   => '#F5EFFB',
				'desc'       => __( 'Automatically generate, customize, and manage professional WooCommerce invoices, packing slips, and credit notes with advanced automation and tax compliance features.', 'wt-smart-coupons-for-woocommerce' ),
				'features'   => array(),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-pdf-invoices-packing-slips/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=PDF_invoice',
				'pro_plugin' => 'wt-woocommerce-invoice-addon/wt-woocommerce-invoice-addon.php',
			),
		),
		'plugins'    => array(
			array(
				'type'       => 'standard',
				'name'       => __( 'Shipping Labels, Dispatch Labels, & Delivery Notes', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'shipping-labels-plugin.png',
				'rating'     => '5.0',
				'features'   => array(
					__( 'Create delivery notes, shipping & dispatch labels', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Enable customers to print the documents from order emails', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Customize shipping label size', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-shipping-labels-delivery-notes/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Shipping_Label',
				'pro_plugin' => 'wt-woocommerce-shippinglabel-addon/wt-woocommerce-shippinglabel-addon.php',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'WooCommerce Picklists plugin', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'picklists-plugin.png',
				'rating'     => '4.0',
				'features'   => array(
					__( 'Bulk print picklists from the admin order page', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Automatically email picklists based on order status', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Create or customize picklist templates', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-picklist/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Picklist',
				'pro_plugin' => 'wt-woocommerce-picklist-addon/wt-woocommerce-picklist-addon.php',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'Customizer for WooCommerce PDF Invoices', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'pdf-customizer-plugin.png',
				'rating'     => '5.0',
				'features'   => array(
					__( 'Drag-and-drop easy customization', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Customize individual elements using block editors', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Advanced visual and code editor', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/customizer-for-woocommerce-pdf-invoice/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=PDF_Customizer',
				'pro_plugin' => 'wt-advanced-customizer-addon/wt-advanced-customizer-addon.php',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'WooCommerce Address Labels plugin', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'address-labels-plugin.png',
				'rating'     => '5.0',
				'features'   => array(
					__( 'Generate \'Shipping Address\', \'Billing Address\', \'From Address\', and \'Return Address\' labels', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Customize label sizes', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Bulk print address labels', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-address-label/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Address_Label',
				'pro_plugin' => 'wt-woocommerce-addresslabel-addon/wt-woocommerce-addresslabel-addon.php',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'Proforma Invoice', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'proforma-invoice-plugin.png',
				'rating'     => '5.0',
				'features'   => array(
					__( 'Create proforma invoices automatically', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Pre-built proforma invoice layouts', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Attach proforma invoice PDF to order emails', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-proforma-invoice/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Proforma_Invoice',
				'pro_plugin' => 'wt-woocommerce-proforma-addon/wt-woocommerce-proforma-addon.php',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'QR Code Add-on for WooCommerce PDF Invoices', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'qr-code-plugin.png',
				'rating'     => '5.0',
				'features'   => array(
					__( 'Assign QR codes to all generated invoices', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Create QR code that reads order or invoice number', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Add custom data to invoices', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/qr-code-addon-for-woocommerce-pdf-invoices/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=QR_Code',
				'pro_plugin' => 'qrcode-addon-for-woocommerce-pdf-invoices/qrcode-addon-for-woocommerce-pdf-invoices.php',
			),
			array(
				'type'       => 'standard',
				'name'       => __( 'WooCommerce Request a Quote', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'request-quote-plugin.png',
				'rating'     => '5.0',
				'features'   => array(
					__( 'Add quote button to the product & shop pages', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Enable quotation request for selected products', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Automatically send quotes to users', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-request-a-quote/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Request_Quote',
				'pro_plugin' => 'wt-woo-request-quote/wt-woo-request-quote.php',
			),
			array(
				'type'       => 'standard-with-image',
				'name'       => __( 'Sequential Order Numbers', 'wt-smart-coupons-for-woocommerce' ),
				'icon'       => 'sequential-orders-plugin.png',
				'rating'     => 'stars',
				'features'   => array(
					__( 'Auto reset sequence per month/year etc', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Add a custom suffix for order numbers', 'wt-smart-coupons-for-woocommerce' ),
					__( 'Date suffix in order numbers', 'wt-smart-coupons-for-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-sequential-order-numbers/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Sequential_Order_Numbers',
				'image_src'  => 'seq-orders-illustration.png',
				'pro_plugin' => 'wt-woocommerce-sequential-order-numbers-pro/wt-advanced-order-number-pro.php',
			),
		),
		'bundle'     => array(
			'tag_emoji'    => '📄',
			'tag_color'    => 'green',
			'tag'          => __( 'Invoice Bundle', 'wt-smart-coupons-for-woocommerce' ),
			'title'        => __( 'All in one Invoice bundle', 'wt-smart-coupons-for-woocommerce' ),
			'url'          => 'https://www.webtoffee.com/pdf-invoices-packing-slips-suite-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=Invoice_bundle',
			'desc'         => __( 'A complete suite of invoices and shipping documents bundle to create and print PDF invoices, packing slips, shipping and delivery documents in WooCommerce.', 'wt-smart-coupons-for-woocommerce' ),
			'pills'        => array(
				__( 'Invoice', 'wt-smart-coupons-for-woocommerce' ),
				__( 'Packing Slip', 'wt-smart-coupons-for-woocommerce' ),
				__( 'Address Labels', 'wt-smart-coupons-for-woocommerce' ),
				__( 'Dispatch Labels', 'wt-smart-coupons-for-woocommerce' ),
				__( 'Shipping Labels', 'wt-smart-coupons-for-woocommerce' ),
				__( 'Delivery Notes', 'wt-smart-coupons-for-woocommerce' ),
				__( 'Picklists', 'wt-smart-coupons-for-woocommerce' ),
				__( 'Proforma Invoice', 'wt-smart-coupons-for-woocommerce' ),
			),
			'price_orig'   => '$255',
			'price_sale'   => '$179',
			'savings'      => __( 'Save up to 30% off', 'wt-smart-coupons-for-woocommerce' ),
			'illustration' => 'invoice-bundle.png',
			// The five products behind the eight pills above. Dropped only once the store runs all five.
			'pro_plugin'   => array(
				'wt-woocommerce-invoice-addon/wt-woocommerce-invoice-addon.php',
				'wt-woocommerce-shippinglabel-addon/wt-woocommerce-shippinglabel-addon.php',
				'wt-woocommerce-addresslabel-addon/wt-woocommerce-addresslabel-addon.php',
				'wt-woocommerce-picklist-addon/wt-woocommerce-picklist-addon.php',
				'wt-woocommerce-proforma-addon/wt-woocommerce-proforma-addon.php',
			),
		),
		'standalone' => array(),
	),
);

/*
 * Drop cards for plugins the store already runs, then drop any category left
 * with nothing to show at all — otherwise its sidebar entry opens a blank panel.
 */
foreach ( $wt_sc_os_categories as $wt_sc_os_cat_id => $wt_sc_os_cat ) {  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$wt_sc_os_categories[ $wt_sc_os_cat_id ]['heroes']  = array_values(  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
		array_filter( $wt_sc_os_cat['heroes'], array( 'Wt_Smart_Coupon_Other_Solutions', 'is_promotable' ) )
	);
	$wt_sc_os_categories[ $wt_sc_os_cat_id ]['plugins'] = array_values(  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
		array_filter( $wt_sc_os_cat['plugins'], array( 'Wt_Smart_Coupon_Other_Solutions', 'is_promotable' ) )
	);

	// A bundle stops being an offer once every product in it is already active.
	if ( ! empty( $wt_sc_os_cat['bundle'] )
		&& ! Wt_Smart_Coupon_Other_Solutions::is_promotable( $wt_sc_os_cat['bundle'] ) ) {
		$wt_sc_os_categories[ $wt_sc_os_cat_id ]['bundle'] = array();  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	}

	$wt_sc_os_kept = $wt_sc_os_categories[ $wt_sc_os_cat_id ];  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

	if ( empty( $wt_sc_os_kept['heroes'] ) && empty( $wt_sc_os_kept['plugins'] )
		&& empty( $wt_sc_os_kept['bundle'] ) && empty( $wt_sc_os_kept['standalone'] ) ) {
		unset( $wt_sc_os_categories[ $wt_sc_os_cat_id ] );
	}
}

// Nothing left to promote — render nothing rather than an empty shell.
if ( empty( $wt_sc_os_categories ) ) {
	return;
}

// array_key_first() is PHP 7.3+; the plugin still declares support for 5.6.
$wt_sc_os_cat_keys    = array_keys( $wt_sc_os_categories );  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
$wt_sc_os_first_key   = $wt_sc_os_cat_keys[0];  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
$wt_sc_os_first_cat   = $wt_sc_os_categories[ $wt_sc_os_first_key ];  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
$wt_sc_os_star_markup = str_repeat( '<span class="wt-sc-os-star">&#9733;</span>', 5 );  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
?>

<div class="wt-sc-os-page">

	<div class="wt-sc-os-header">
		<?php // Heading level matched to the other settings tabs. An h1/h2 here collects the page's admin notices. ?>
		<h3 class="wt-sc-os-page-title" id="wt-sc-os-cat-title"><?php echo esc_html( $wt_sc_os_first_cat['label'] ); ?></h3>
		<p class="wt-sc-os-page-subtitle" id="wt-sc-os-cat-subtitle"><?php echo esc_html( $wt_sc_os_first_cat['subtitle'] ); ?></p>
	</div>

	<div class="wt-sc-os-layout">

		<?php /* ---- Category sidebar ---- */ ?>
		<div class="wt-sc-os-sidebar">
			<ul class="wt-sc-os-sidebar-nav" role="tablist">
				<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ foreach ( $wt_sc_os_categories as $wt_sc_os_cat_id => $wt_sc_os_cat ) : ?>
					<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ $wt_sc_os_is_first = ( $wt_sc_os_cat_id === $wt_sc_os_first_key ); ?>
					<li role="presentation">
						<a href="#"
							role="tab"
							aria-selected="<?php echo $wt_sc_os_is_first ? 'true' : 'false'; ?>"
							aria-controls="wt-sc-os-panel-<?php echo esc_attr( $wt_sc_os_cat_id ); ?>"
							class="wt-sc-os-cat-link<?php echo $wt_sc_os_is_first ? ' active' : ''; ?>"
							data-category="<?php echo esc_attr( $wt_sc_os_cat_id ); ?>">
							<img class="wt-sc-os-cat-icon"
								src="<?php echo esc_url( $wt_sc_os_img . '/' . $wt_sc_os_cat['icon'] ); ?>"
								alt="">
							<?php echo esc_html( $wt_sc_os_cat['label'] ); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

			<div class="wt-sc-os-trust-badges">
				<div class="wt-sc-os-trust-badge">
					<img src="<?php echo esc_url( $wt_sc_os_img . '/thirty-day-guarantee.png' ); ?>" alt="">
					<span><?php esc_html_e( '30 Day No Risk Money Back Guarantee', 'wt-smart-coupons-for-woocommerce' ); ?></span>
				</div>
				<div class="wt-sc-os-trust-badge">
					<img src="<?php echo esc_url( $wt_sc_os_img . '/satisfaction-badge.png' ); ?>" alt="">
					<span><?php esc_html_e( 'Fast Support with 99% Satisfaction Rating', 'wt-smart-coupons-for-woocommerce' ); ?></span>
				</div>
			</div>
		</div>

		<?php /* ---- Category panels ---- */ ?>
		<div class="wt-sc-os-main">

			<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ foreach ( $wt_sc_os_categories as $wt_sc_os_cat_id => $wt_sc_os_cat ) : ?>
				<div id="wt-sc-os-panel-<?php echo esc_attr( $wt_sc_os_cat_id ); ?>"
					class="wt-sc-os-category-panel<?php echo ( $wt_sc_os_cat_id === $wt_sc_os_first_key ) ? ' active' : ''; ?>"
					data-title="<?php echo esc_attr( $wt_sc_os_cat['label'] ); ?>"
					data-subtitle="<?php echo esc_attr( $wt_sc_os_cat['subtitle'] ); ?>">

					<?php /* -- Hero cards -- */ ?>
					<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ foreach ( $wt_sc_os_cat['heroes'] as $wt_sc_os_hero ) : ?>
						<div class="wt-sc-os-hero-card">
							<div class="wt-sc-os-hero-left">
								<div class="wt-sc-os-hero-title-row">
									<img class="wt-sc-os-hero-icon"
										src="<?php echo esc_url( $wt_sc_os_img . '/' . $wt_sc_os_hero['icon'] ); ?>"
										alt="">
									<div class="wt-sc-os-hero-heading">
										<h3 class="wt-sc-os-hero-name"><?php echo esc_html( $wt_sc_os_hero['name'] ); ?></h3>
										<div class="wt-sc-os-hero-stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'wt-smart-coupons-for-woocommerce' ); ?>">
											<?php echo wp_kses_post( $wt_sc_os_star_markup ); ?>
										</div>
									</div>
								</div>
								<?php if ( ! empty( $wt_sc_os_hero['desc'] ) ) : ?>
									<p class="wt-sc-os-hero-desc"><?php echo esc_html( $wt_sc_os_hero['desc'] ); ?></p>
								<?php endif; ?>
								<?php if ( ! empty( $wt_sc_os_hero['features'] ) ) : ?>
									<ul class="wt-sc-os-hero-features">
										<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ foreach ( $wt_sc_os_hero['features'] as $wt_sc_os_feature ) : ?>
											<li>
												<span class="dashicons dashicons-yes-alt"></span>
												<?php echo esc_html( $wt_sc_os_feature ); ?>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<?php Wt_Smart_Coupon_Other_Solutions::render_actions( $wt_sc_os_hero ); ?>
							</div>
							<?php if ( ! empty( $wt_sc_os_hero['image'] ) ) : ?>
								<?php
								// Artwork sitting on a tinted panel is inset; artwork that supplies
								// its own panel runs to the card edge.
								$wt_sc_os_fit = '';  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
								if ( isset( $wt_sc_os_hero['image_fit'] ) && 'contain' === $wt_sc_os_hero['image_fit'] ) {
									$wt_sc_os_fit  = ' wt-sc-os-hero-right--contain';  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
									$wt_sc_os_fit .= empty( $wt_sc_os_hero['panel_bg'] ) ? '' : ' wt-sc-os-hero-right--inset';  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
								}
								?>
								<div class="wt-sc-os-hero-right<?php echo esc_attr( $wt_sc_os_fit ); ?>"
									<?php if ( ! empty( $wt_sc_os_hero['panel_bg'] ) ) : ?>
										style="background-color:<?php echo esc_attr( $wt_sc_os_hero['panel_bg'] ); ?>"
									<?php endif; ?>>
									<img src="<?php echo esc_url( $wt_sc_os_img . '/' . $wt_sc_os_hero['image'] ); ?>" alt="">
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>

					<?php /* -- Plugin card grid -- */ ?>
					<?php if ( ! empty( $wt_sc_os_cat['plugins'] ) ) : ?>
						<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ foreach ( array_chunk( $wt_sc_os_cat['plugins'], 3 ) as $wt_sc_os_row ) : ?>
							<div class="wt-sc-os-card-grid">
								<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ foreach ( $wt_sc_os_row as $wt_sc_os_plugin ) : ?>
									<?php
									$wt_sc_os_with_image = ( 'standard-with-image' === $wt_sc_os_plugin['type'] && ! empty( $wt_sc_os_plugin['image_src'] ) );  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
									$wt_sc_os_is_stars   = ( 'stars' === $wt_sc_os_plugin['rating'] );  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
									$wt_sc_os_classes    = 'wt-sc-os-card';  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
									$wt_sc_os_classes   .= $wt_sc_os_with_image ? ' wt-sc-os-card--with-image' : '';  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
									$wt_sc_os_classes   .= $wt_sc_os_is_stars ? ' wt-sc-os-card--stacked-rating' : '';  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound

									$wt_sc_os_rating_label = sprintf(  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
										/* translators: %s: rating out of five, e.g. 4.9 */
										__( '%s out of 5 stars', 'wt-smart-coupons-for-woocommerce' ),
										$wt_sc_os_plugin['rating']
									);
									?>
									<div class="<?php echo esc_attr( $wt_sc_os_classes ); ?>">
										<div class="wt-sc-os-card-body">
											<div class="wt-sc-os-card-header">
												<div class="wt-sc-os-card-icon-name">
													<img class="wt-sc-os-card-icon"
														src="<?php echo esc_url( $wt_sc_os_img . '/' . $wt_sc_os_plugin['icon'] ); ?>"
														alt="">
													<span class="wt-sc-os-card-name"><?php echo esc_html( $wt_sc_os_plugin['name'] ); ?></span>
												</div>
												<?php if ( $wt_sc_os_is_stars ) : ?>
													<span class="wt-sc-os-card-rating wt-sc-os-card-rating--stars"
														aria-label="<?php esc_attr_e( '5 out of 5 stars', 'wt-smart-coupons-for-woocommerce' ); ?>">
														<?php echo wp_kses_post( $wt_sc_os_star_markup ); ?>
													</span>
												<?php else : ?>
													<span class="wt-sc-os-card-rating"
														aria-label="<?php echo esc_attr( $wt_sc_os_rating_label ); ?>">
														<?php echo esc_html( $wt_sc_os_plugin['rating'] ); ?>
														<span class="wt-sc-os-star">&#9733;</span>
													</span>
												<?php endif; ?>
											</div>
											<ul class="wt-sc-os-card-features">
												<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ foreach ( $wt_sc_os_plugin['features'] as $wt_sc_os_feature ) : ?>
													<li>
														<span class="dashicons dashicons-yes-alt"></span>
														<?php echo esc_html( $wt_sc_os_feature ); ?>
													</li>
												<?php endforeach; ?>
											</ul>
											<?php Wt_Smart_Coupon_Other_Solutions::render_actions( $wt_sc_os_plugin ); ?>
										</div>
										<?php if ( $wt_sc_os_with_image ) : ?>
											<div class="wt-sc-os-card-image-side">
												<img src="<?php echo esc_url( $wt_sc_os_img . '/' . $wt_sc_os_plugin['image_src'] ); ?>" alt="">
											</div>
										<?php endif; ?>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>

					<?php /* -- Bundle offer -- */ ?>
					<?php if ( ! empty( $wt_sc_os_cat['bundle'] ) ) : ?>
						<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ $wt_sc_os_bundle = $wt_sc_os_cat['bundle']; ?>
						<div class="wt-sc-os-bundle">
							<div class="wt-sc-os-bundle-content">
								<span class="wt-sc-os-bundle-tag wt-sc-os-bundle-tag--<?php echo esc_attr( $wt_sc_os_bundle['tag_color'] ); ?>">
									<span class="wt-sc-os-bundle-tag-emoji"><?php echo esc_html( $wt_sc_os_bundle['tag_emoji'] ); ?></span>
									<?php echo esc_html( $wt_sc_os_bundle['tag'] ); ?>
								</span>
								<div class="wt-sc-os-bundle-title">
									<a href="<?php echo esc_url( $wt_sc_os_bundle['url'] ); ?>" target="_blank" rel="noopener noreferrer">
										<?php echo esc_html( $wt_sc_os_bundle['title'] ); ?>
									</a>
									<span class="dashicons dashicons-external"></span>
								</div>
								<p class="wt-sc-os-bundle-desc"><?php echo esc_html( $wt_sc_os_bundle['desc'] ); ?></p>
								<div class="wt-sc-os-bundle-pills">
									<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ foreach ( $wt_sc_os_bundle['pills'] as $wt_sc_os_pill ) : ?>
										<span class="wt-sc-os-bundle-pill">
											<span class="dashicons dashicons-yes-alt"></span>
											<?php echo esc_html( $wt_sc_os_pill ); ?>
										</span>
									<?php endforeach; ?>
								</div>
								<p class="wt-sc-os-bundle-pricing">
									<?php
									printf(
										wp_kses(
											/* translators: 1: original price, struck through. 2: discounted price. 3: savings text. */
											__( 'Total: <s>%1$s</s> <strong>%2$s</strong> <span class="wt-sc-os-savings">(%3$s)</span>', 'wt-smart-coupons-for-woocommerce' ),
											array(
												's'      => array(),
												'strong' => array(),
												'span'   => array( 'class' => array() ),
											)
										),
										esc_html( $wt_sc_os_bundle['price_orig'] ),
										esc_html( $wt_sc_os_bundle['price_sale'] ),
										esc_html( $wt_sc_os_bundle['savings'] )
									);
									?>
								</p>
								<a href="<?php echo esc_url( $wt_sc_os_bundle['url'] ); ?>"
									target="_blank"
									rel="noopener noreferrer"
									class="wt-sc-os-btn-bundle">
									<?php esc_html_e( 'View Bundle', 'wt-smart-coupons-for-woocommerce' ); ?>
									<span class="dashicons dashicons-external"></span>
								</a>
							</div>
							<?php if ( ! empty( $wt_sc_os_bundle['illustration'] ) ) : ?>
								<div class="wt-sc-os-bundle-illustration">
									<img src="<?php echo esc_url( $wt_sc_os_img . '/' . $wt_sc_os_bundle['illustration'] ); ?>" alt="">
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<?php /* -- Standalone app card -- */ ?>
					<?php if ( ! empty( $wt_sc_os_cat['standalone'] ) ) : ?>
						<?php /* phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound */ $wt_sc_os_solo = $wt_sc_os_cat['standalone']; ?>
						<div class="wt-sc-os-standalone">
							<div class="wt-sc-os-standalone-content">
								<div class="wt-sc-os-standalone-header">
									<img class="wt-sc-os-standalone-icon"
										src="<?php echo esc_url( $wt_sc_os_img . '/' . $wt_sc_os_solo['icon'] ); ?>"
										alt="">
									<h3 class="wt-sc-os-standalone-name"><?php echo esc_html( $wt_sc_os_solo['name'] ); ?></h3>
								</div>
								<p class="wt-sc-os-standalone-desc"><?php echo esc_html( $wt_sc_os_solo['desc'] ); ?></p>
								<?php Wt_Smart_Coupon_Other_Solutions::render_actions( $wt_sc_os_solo, $wt_sc_os_solo['cta_label'], false ); ?>
							</div>
							<?php if ( ! empty( $wt_sc_os_solo['screenshot'] ) ) : ?>
								<div class="wt-sc-os-standalone-screenshot">
									<img src="<?php echo esc_url( $wt_sc_os_img . '/' . $wt_sc_os_solo['screenshot'] ); ?>" alt="">
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>
