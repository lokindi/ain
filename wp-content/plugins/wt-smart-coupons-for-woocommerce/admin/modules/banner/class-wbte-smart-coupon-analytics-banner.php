<?php
/**
 * Smart Coupons analytics page banner
 *
 * @since 2.2.5
 * @since 2.3.1 Renamed from class-wbte-ema-banner.php and repointed from the
 *              Ecommerce Marketing Automation promotion to Smart Coupons.
 *
 * @package  Wt_Smart_Coupon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Wbte_Smart_Coupon_Analytics_Banner' ) ) {
	/**
	 * Class Wbte_Smart_Coupon_Analytics_Banner
	 *
	 * @since 2.2.5
	 */
	class Wbte_Smart_Coupon_Analytics_Banner {
		/**
		 * Module id
		 *
		 * @var string
		 */
		public $module_id = '';

		/**
		 * Module id static
		 *
		 * @var string
		 */
		public static $module_id_static = '';

		/**
		 * Module base
		 *
		 * @var string
		 */
		public $module_base = 'sc_analytics_banner';

		/**
		 * The single instance of the class
		 *
		 * @var self|null
		 */
		private static $instance = null;

		/**
		 * The dismiss option name in WP Options table
		 *
		 * @var string
		 */
		private $dismiss_option = 'wbte_ema_banner_analytics_page_dismiss';

		/**
		 * Constructor
		 *
		 * @since 2.2.5
		 */
		public function __construct() {
			$this->module_id        = $this->module_base;
			self::$module_id_static = $this->module_id;

			include_once ABSPATH . 'wp-admin/includes/plugin.php';

			if ( ! array_key_exists( 'wt-smart-coupon-pro/wt-smart-coupon-pro.php', get_plugins() ) ) {
				add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );
				add_action( 'admin_footer', array( $this, 'inject_analytics_script' ) );
				add_action( 'wp_ajax_wt_sc_dismiss_analytics_banner', array( $this, 'wt_sc_dismiss_analytics_banner' ) );
			}
		}

		/**
		 * Ensures only one instance is loaded or can be loaded.
		 *
		 * @since 2.2.5
		 * @return self
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Enqueue banner styles
		 *
		 * @since 2.2.5
		 */
		public function enqueue_styles() {
			if ( ! $this->is_banner_displayable() ) {
				return;
			}

			wp_enqueue_style( 'wt-sc-analytics-banner', plugin_dir_url( __FILE__ ) . 'assets/css/wt-sc-analytics-banner.css', array(), WEBTOFFEE_SMARTCOUPON_VERSION );
			wp_enqueue_script( 'wt-sc-analytics-banner', plugin_dir_url( __FILE__ ) . 'assets/js/wt-sc-analytics-banner.js', array( 'jquery' ), WEBTOFFEE_SMARTCOUPON_VERSION, true );

			wp_localize_script(
				'wt-sc-analytics-banner',
				'wt_sc_analytics_banner_params',
				array(
					'ajaxurl' => esc_url( admin_url( 'admin-ajax.php' ) ),
					'nonce'   => wp_create_nonce( 'wt_sc_analytics_banner_nonce' ),
				)
			);
		}

		/**
		 * Check if we should display the banner
		 *
		 * @since 2.2.5
		 * @return boolean
		 */
		private function is_banner_displayable() {
			$screen = get_current_screen();

			// Only inject on analytics page.
			if ( ! $screen || 'woocommerce_page_wc-admin' !== $screen->id || ! isset( $_GET['path'] ) || false === strpos( sanitize_text_field( wp_unslash( $_GET['path'] ) ), '/analytics' ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
				return false;
			}

			return ! get_option( $this->dismiss_option ) && ! defined( 'WBTE_SC_ANALYTICS_BANNER' );
		}

		/**
		 * Ajax handler to dismiss the BFCM banner
		 *
		 * @since 2.2.5
		 */
		public function wt_sc_dismiss_analytics_banner() {
			check_ajax_referer( 'wt_sc_analytics_banner_nonce', 'nonce' );

			// Matches the capability that gates the WooCommerce Analytics screen this banner appears on.
			if ( ! current_user_can( 'manage_woocommerce' ) ) {
				wp_send_json_error( __( 'Access denied', 'wt-smart-coupons-for-woocommerce' ) );
			}

			update_option( $this->dismiss_option, true );
			wp_send_json_success();
		}

		/**
		 * Inject analytics script in admin footer
		 *
		 * @since 2.2.5
		 */
		public function inject_analytics_script() {

			if ( ! $this->is_banner_displayable() ) {
				return;
			}

			ob_start();

			$sale_link = 'https://www.webtoffee.com/product/smart-coupons-for-woocommerce/?utm_source=free_plugin_analytics_revenue_tab&utm_medium=smart_coupons_free&utm_campaign=smart_coupons';

			?>

				<div class="wt_sc_analytics_banner hide">
					<div class="wt_sc_analytics_banner_box">
						<div class="wt_sc_analytics_banner_text">
							<img src="<?php echo esc_url( WT_SMARTCOUPON_MAIN_URL . 'admin/images/idea_bulb_purple.svg' ); ?>" alt="">
							<span class="wt_sc_analytics_banner_title"><?php esc_html_e( 'Did you know?', 'wt-smart-coupons-for-woocommerce' ); ?></span>
							<?php esc_html_e( 'WebToffee Smart Coupons lets you create BOGO offers, giveaways, and store credits to help grow your store\'s revenue.', 'wt-smart-coupons-for-woocommerce' ); ?>
						</div>
						<div class="wt_sc_analytics_banner_actions">
							<a href="<?php echo esc_url( $sale_link ); ?>" class="btn-primary" target="_blank"><?php esc_html_e( 'Get Plugin Now', 'wt-smart-coupons-for-woocommerce' ); ?> <span class="dashicons dashicons-arrow-right-alt"></span></a>
							<button type="button" class="notice-dismiss wt_sc_analytics_banner_dismiss">
								<span class="screen-reader-text"><?php esc_html_e( 'Dismiss this notice.', 'wt-smart-coupons-for-woocommerce' ); ?></span>
							</button>
						</div>
					</div>
				</div>

			<?php
			define( 'WBTE_SC_ANALYTICS_BANNER', true );
			$output = ob_get_clean();

			if ( empty( trim( $output ) ) ) {
				return;
			}
			?>
			<script type="text/javascript">
				/** Wait for DOM to be fully loaded and give extra time for dynamic content */
				setTimeout(function() {
					const banner_output = document.createElement('div');
					banner_output.innerHTML = <?php echo wp_json_encode( wp_kses_post( $output ) ); ?>;
					
					/** Add margin to the banner */
					const banner = banner_output.querySelector('.wt_sc_analytics_banner');
					if (banner) {
						banner.style.margin = '15px 40px 5px 40px';
					}
					
					/** Find the header element */
					const header = document.querySelector('.woocommerce-layout__header');
					if (header && header.parentNode) {
						/** Insert after the header */
						header.parentNode.insertBefore(banner_output, header.nextSibling);
					}
				}, 1000); /** 1 second delay */
			</script>
			<?php
		}
	}

	Wbte_Smart_Coupon_Analytics_Banner::get_instance();
}

