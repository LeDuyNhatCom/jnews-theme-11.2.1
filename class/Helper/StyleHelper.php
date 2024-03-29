<?php
/**
 * Style Helper
 *
 * @author : Jegtheme
 * @package jnews
 */

namespace JNews\Helper;

/**
 * Class JNews Helper Style
 */
class StyleHelper {

	/**
	 * Instance
	 *
	 * @var StyleHelper
	 */
	private static $instance;

	/**
	 * Instance
	 *
	 * @return StyleHelper
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
		add_filter( 'body_class', array( $this, 'body_class' ) );
	}

	/**
	 * Method body_class
	 *
	 * @param array $classes $classes.
	 *
	 * @return array
	 */
	public function body_class( $classes ) {
		$classes[] = 'jnews';

		if ( get_theme_mod( 'jnews_boxed_layout', false ) ) {
			$classes[] = 'jeg_boxed';
		}

		if ( get_theme_mod( 'jnews_sidefeed_enable', false ) ) {
			$classes[] = 'jeg_sidecontent';
		}

		if ( get_theme_mod( 'jnews_sidefeed_enable', false ) ) {
			$classes[] = 'jeg_sidecontent_' . get_theme_mod( 'jnews_sidefeed_main_position', 'center' );
		}

		if ( get_theme_mod( 'jnews_boxed_container', false ) ) {
			$classes[] = 'jnews_boxed_container';
		}

		if ( get_theme_mod( 'jnews_boxed_container_shadow', false ) ) {
			$classes[] = 'jnews_boxed_container_shadow';
		}

		if ( get_theme_mod( 'jnews_single_disable_table_styling', false ) ) {
			$classes[] = 'jnews-disable-style-table';
		}

		if ( get_theme_mod( 'jnews_single_enable_scrolling_table', false ) ) {
			$classes[] = 'jeg-mobile-table-scrollable';
		}

		$classes[] = 'jsc_' . get_theme_mod( 'jnews_scheme_color', 'normal' );

		return $classes;
	}

	/** Menu class */

	/**
	 * Method header_bottombar_class
	 *
	 * @return void
	 */
	public static function header_bottombar_class() {
		$classes   = array();
		$classes[] = 'jeg_navbar_wrapper';

		$classes[] = get_theme_mod( 'jnews_header_bottombar_boxed', 'jeg_navbar_normal' );

		if ( get_theme_mod( 'jnews_header_bottombar_boxed', false ) ) {
			$classes[] = 'jeg_navbar_boxed';
		}

		if ( get_theme_mod( 'jnews_header_bottombar_shadow', false ) ) {
			$classes[] = 'jeg_navbar_shadow';
		}

		if ( get_theme_mod( 'jnews_header_bottombar_fitwidth', false ) ) {
			$classes[] = 'jeg_navbar_fitwidth';
		}

		if ( get_theme_mod( 'jnews_header_bottombar_border', false ) ) {
			$classes[] = 'jeg_navbar_menuborder';
		}

		$classes[] = get_theme_mod( 'jnews_header_bottombar_scheme', 'jeg_navbar_normal' );

		echo esc_attr( implode( ' ', $classes ) );
	}

		/**
		 * Method header_midbar_class
		 *
		 * @return void
		 */
	public static function header_midbar_class() {
		$classes   = array();
		$classes[] = 'jeg_navbar_wrapper';

		$classes[] = get_theme_mod( 'jnews_header_midbar_scheme', 'normal' );

		echo esc_attr( implode( ' ', $classes ) );
	}

	/**
	 * Method header_stickybar_class
	 *
	 * @return void
	 */
	public static function header_stickybar_class() {
		$classes   = array();
		$classes[] = 'jeg_navbar_wrapper';

		$classes[] = get_theme_mod( 'jnews_header_stickybar_boxed', 'jeg_navbar_normal' );

		if ( get_theme_mod( 'jnews_header_stickybar_boxed', false ) ) {
			$classes[] = 'jeg_navbar_boxed';
		}

		if ( get_theme_mod( 'jnews_header_stickybar_shadow', false ) ) {
			$classes[] = 'jeg_navbar_shadow';
		}

		if ( get_theme_mod( 'jnews_header_stickybar_fitwidth', false ) ) {
			$classes[] = 'jeg_navbar_fitwidth';
		}

		if ( get_theme_mod( 'jnews_header_stickybar_border', false ) ) {
			$classes[] = 'jeg_navbar_menuborder';
		}

		$classes[] = get_theme_mod( 'jnews_header_stickybar_scheme', 'jeg_navbar_normal' );

		echo esc_attr( implode( ' ', $classes ) );
	}

	/**
	 * Method header_topbar_class
	 *
	 * @return void
	 */
	public static function header_topbar_class() {
		$classes   = array();
		$classes[] = 'jeg_navbar_wrapper';

		$classes[] = get_theme_mod( 'jnews_header_topbar_scheme', 'dark' );

		echo esc_attr( implode( ' ', $classes ) );
	}
}
