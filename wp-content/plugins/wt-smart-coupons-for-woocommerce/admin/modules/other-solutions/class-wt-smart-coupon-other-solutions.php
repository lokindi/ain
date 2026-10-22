<?php
/**
 * Other Solutions
 *
 * @link
 * @since 1.4.4
 *
 * @package  Wt_Smart_Coupon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Other Solutions class
 *
 * @since 1.4.4
 */
class Wt_Smart_Coupon_Other_Solutions {

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
	public $module_base = 'other_solutions';

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->module_id        = $this->module_base;
		self::$module_id_static = $this->module_id;

		add_filter( 'wt_sc_plugin_settings_tabhead', array( $this, 'settings_tabhead' ), 1 );
		add_filter( 'wt_sc_plugin_out_settings_form', array( $this, 'out_settings_form' ), 1 );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts_styles' ), 10, 0 );
	}


	/**
	 *  Tab head for plugin settings page
	 *
	 *  @since 1.4.4
	 *  @param array $arr Array of settings tabs.
	 *  @return array Modified array of settings tabs.
	 */
	public function settings_tabhead( $arr ) {
		$added   = 0;
		$out_arr = array();
		foreach ( $arr as $k => $v ) {
			$out_arr[ $k ] = $v;
			if ( 'wt-sc-freevspro' === $k && 0 === $added ) {
				$out_arr[ 'wt-sc-' . $this->module_base ] = __( 'Other Solutions', 'wt-smart-coupons-for-woocommerce' );
				$added                                    = 1;
			}
		}
		if ( 0 === $added ) {
			$out_arr[ 'wt-sc-' . $this->module_base ] = __( 'Other Solutions', 'wt-smart-coupons-for-woocommerce' );
		}

		return $out_arr;
	}

	/**
	 *  Coupon banner tab content
	 *
	 *  @since 1.4.4
	 */
	public function out_settings_form() {
		$view_file   = plugin_dir_path( __FILE__ ) . 'views/other-solutions-content.php';
		$view_params = array();

		Wt_Smart_Coupon_Admin::envelope_settings_tabcontent( 'wt-sc-' . $this->module_base, $view_file, '', $view_params, 0 );
	}

	/**
	 * Enqueue necessary style and script for the module
	 *
	 * @since 2.3.1 Added the category sidebar script and the dashicons dependency.
	 */
	public function enqueue_scripts_styles() {
		$page = isset( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended

		if ( WT_SC_PLUGIN_NAME !== $page ) {
			return;
		}

		wp_enqueue_style( 'wt-sc-other-solutions', plugin_dir_url( __FILE__ ) . 'assets/css/main.css', array( 'dashicons' ), WEBTOFFEE_SMARTCOUPON_VERSION, 'all' );
		wp_enqueue_script( 'wt-sc-other-solutions', plugin_dir_url( __FILE__ ) . 'assets/js/main.js', array( 'jquery' ), WEBTOFFEE_SMARTCOUPON_VERSION, true );
	}

	/**
	 * Whether a plugin basename — or every basename in a set — is active.
	 *
	 * @since 2.3.1
	 * @param string|array $plugin Plugin basename, or a list of basenames.
	 * @return bool
	 */
	private static function is_active( $plugin ) {
		if ( empty( $plugin ) || ! function_exists( 'is_plugin_active' ) ) {
			return false;
		}

		if ( is_array( $plugin ) ) {
			foreach ( $plugin as $single ) {
				if ( ! is_plugin_active( $single ) ) {
					return false;
				}
			}

			return true;
		}

		return is_plugin_active( $plugin );
	}

	/**
	 * Whether a card should be shown at all.
	 *
	 * @since 2.3.1
	 * @param array $item Card definition.
	 * @return bool
	 */
	public static function is_promotable( $item ) {
		return ! self::is_active( isset( $item['pro_plugin'] ) ? $item['pro_plugin'] : '' );
	}

	/**
	 * Render the call-to-action row for a card.
	 *
	 * @since 2.3.1
	 * @param array  $item          Card definition.
	 * @param string $premium_label Label for the button.
	 * @param bool   $show_crown    Whether to prefix the label with the crown glyph.
	 * @return void
	 */
	public static function render_actions( $item, $premium_label = '', $show_crown = true ) {
		$premium_url   = isset( $item['url'] ) ? $item['url'] : '';
		$premium_label = '' !== $premium_label ? $premium_label : __( 'Get premium', 'wt-smart-coupons-for-woocommerce' );

		if ( '' === $premium_url ) {
			return;
		}

		?>
		<div class="wt-sc-os-actions">
			<a href="<?php echo esc_url( $premium_url ); ?>"
				target="_blank"
				rel="noopener noreferrer"
				class="wt-sc-os-btn-premium">
				<?php if ( $show_crown ) : ?>
					<span class="wt-sc-os-crown" aria-hidden="true"></span>
				<?php endif; ?>
				<?php echo esc_html( $premium_label ); ?>
			</a>
		</div>
		<?php
	}
}

new Wt_Smart_Coupon_Other_Solutions();
