<?php
/**
 * Header Builder
 *
 * @author : Jegtheme
 * @package jnews
 */

namespace JNews;

/**
 * Class JNews Header Builder
 */
class HeaderBuilder {
	/**
	 * Instance
	 *
	 * @var HeaderBuilder
	 */
	private static $instance;

	/**
	 * Instance
	 *
	 * @return HeaderBuilder
	 */
	public static function getInstance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Method __construct
	 *
	 * @return void
	 */
	private function __construct() {
		add_action( 'customize_controls_print_footer_scripts', array( $this, 'header_builder_html' ) );
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'header_builder_js' ) );
	}

	/**
	 * Method desktop_header_element
	 *
	 * @return array
	 */
	public static function desktop_header_element() {
		return array(
			'dark_mode'     => esc_html__( 'Dark Mode', 'jnews' ),
			'top_bar_menu'  => esc_html__( 'Top Bar Menu', 'jnews' ),
			'social_icon'   => esc_html__( 'Social Icon', 'jnews' ),
			'nav_icon'      => esc_html__( 'Nav Icon', 'jnews' ),
			'date'          => esc_html__( 'Date', 'jnews' ),
			'logo'          => esc_html__( 'Logo', 'jnews' ),
			'ads'           => esc_html__( 'Advertisement', 'jnews' ),
			'main_menu'     => esc_html__( 'Main Menu', 'jnews' ),
			'search_icon'   => esc_html__( 'Search Icon', 'jnews' ),
			'search_form'   => esc_html__( 'Search Form', 'jnews' ),
			'cart_icon'     => esc_html__( 'Cart Icon', 'jnews' ),
			'cart_detail'   => esc_html__( 'Cart Detail', 'jnews' ),
			'weather'       => esc_html__( 'Weather', 'jnews' ),
			'login'         => esc_html__( 'Login', 'jnews' ),
			'language'      => esc_html__( 'Language Switcher', 'jnews' ),
			'separator1'    => esc_html__( '|', 'jnews' ),
			'separator2'    => esc_html__( '|', 'jnews' ),
			'separator3'    => esc_html__( '|', 'jnews' ),
			'separator4'    => esc_html__( '|', 'jnews' ),
			'separator5'    => esc_html__( '|', 'jnews' ),
			'html1'         => esc_html__( 'HTML Element 1', 'jnews' ),
			'html2'         => esc_html__( 'HTML Element 2', 'jnews' ),
			'html3'         => esc_html__( 'HTML Element 3', 'jnews' ),
			'html4'         => esc_html__( 'HTML Element 4', 'jnews' ),
			'html5'         => esc_html__( 'HTML Element 5', 'jnews' ),
			'button1'       => esc_html__( 'Button 1', 'jnews' ),
			'button2'       => esc_html__( 'Button 2', 'jnews' ),
			'button3'       => esc_html__( 'Button 3', 'jnews' ),
			'verticalmenu1' => esc_html__( 'Vertical Menu 1', 'jnews' ),
			'verticalmenu2' => esc_html__( 'Vertical Menu 2', 'jnews' ),
			'verticalmenu3' => esc_html__( 'Vertical Menu 3', 'jnews' ),
			'verticalmenu4' => esc_html__( 'Vertical Menu 4', 'jnews' ),
		);
	}

	/**
	 * Method header_builder_html
	 *
	 * @return void
	 */
	public function header_builder_html() {
		$template = new Template( JNEWS_THEME_DIR . 'class/template/' );
		$template->render( 'header-builder', array( 'template' => $template ), true );
	}

	/**
	 * Method header_builder_js
	 *
	 * @return void
	 */
	public function header_builder_js() {
		wp_enqueue_style( 'jnews-header-builder', get_parent_theme_file_uri( 'assets/css/admin/header-builder.css' ) );
		wp_enqueue_script(
			'jnews-header-builder',
			get_parent_theme_file_uri( 'assets/js/admin/header-builder.js' ),
			array(
				'jquery',
				'jeg-default-control',
				'jeg-preset-control',
			),
			null,
			true
		);
	}

	/**
	 * Method mobile_drawer_element
	 *
	 * @return array
	 */
	public static function mobile_drawer_element() {
		return array(
			'account'          => esc_html__( 'Account', 'jnews' ),
			'footer_copyright' => esc_html__( 'Footer Copyright', 'jnews' ),
			'mobile_menu'      => esc_html__( 'Mobile Menu', 'jnews' ),
			'search_form'      => esc_html__( 'Search Form', 'jnews' ),
			'social_icon'      => esc_html__( 'Social Icon', 'jnews' ),
			'language'         => esc_html__( 'Language', 'jnews' ),
			'html'             => esc_html__( 'Drawer HTML', 'jnews' ),
			'button_drawer'    => esc_html__( 'Button Drawer ', 'jnews' ),
		);
	}

	/**
	 * Method mobile_header_element
	 *
	 * @return array
	 */
	public static function mobile_header_element() {
		return array(
			'dark_mode'    => esc_html__( 'Dark Mode', 'jnews' ),
			'logo'         => esc_html__( 'Logo', 'jnews' ),
			'nav_icon'     => esc_html__( 'Nav Icon', 'jnews' ),
			'search_icon'  => esc_html__( 'Search Icon', 'jnews' ),
			'html'         => esc_html__( 'Mobile HTML', 'jnews' ),
			'buttonmobile' => esc_html__( 'Mobile Button', 'jnews' ),
		);
	}

	/**
	 * Method remain_desktop
	 *
	 * @param string $setting_prefix $setting_prefix.
	 *
	 * @return array
	 */
	public static function remain_desktop( $setting_prefix ) {
		$all_element = self::desktop_header_element();

		$rows_desktop    = array( 'top', 'mid', 'bottom' );
		$columns_desktop = array( 'left', 'center', 'right' );

		if ( 'jnews_hb_element_desktop_sticky' === $setting_prefix ) {
			$rows_desktop = array( 'mid' );
		}

		foreach ( $rows_desktop as $row ) {
			foreach ( $columns_desktop as $column ) {
				$setting_element = "{$setting_prefix}_{$row}_{$column}";
				$default_element = get_theme_mod( $setting_element, array() );

				if ( is_array( $default_element ) ) {
					foreach ( $default_element as $element ) {
						unset( $all_element[ $element ] );
					}
				}
			}
		}

		return $all_element;
	}

	/**
	 * Method remain_desktop_header_element
	 *
	 * @return array
	 */
	public static function remain_desktop_header_element() {
		return self::remain_desktop( 'jnews_hb_element_desktop' );
	}

	/**
	 * Method remain_sticky_header_element
	 *
	 * @return array
	 */
	public static function remain_sticky_header_element() {
		return self::remain_desktop( 'jnews_hb_element_desktop_sticky' );
	}

		/**
		 * Method remain_mobile_drawer_element
		 *
		 * @return array
		 */
	public static function remain_mobile_drawer_element() {
		$all_element = self::mobile_drawer_element();

		$blocks = array(
			'top'    => array( 'center' ),
			'bottom' => array( 'center' ),
		);

		foreach ( $blocks as $row => $columns ) {
			foreach ( $columns as $column ) {
				$setting_element = "jnews_hb_element_mobile_drawer_{$row}_{$column}";
				$default_element = get_theme_mod( $setting_element, array() );

				if ( is_array( $default_element ) ) {
					foreach ( $default_element as $element ) {
						unset( $all_element[ $element ] );
					}
				}
			}
		}

		return $all_element;
	}

	/**
	 * Method remain_mobile_header_element
	 *
	 * @return array
	 */
	public static function remain_mobile_header_element() {
		$all_element = self::mobile_header_element();

		$blocks = array(
			'top' => array( 'center' ),
			'mid' => array( 'left', 'center', 'right' ),
		);

		foreach ( $blocks as $row => $columns ) {
			foreach ( $columns as $column ) {
				$setting_element = "jnews_hb_element_mobile_{$row}_{$column}";
				$default_element = get_theme_mod( $setting_element, array() );

				if ( is_array( $default_element ) ) {
					foreach ( $default_element as $element ) {
						unset( $all_element[ $element ] );
					}
				}
			}
		}

		return $all_element;
	}
}
