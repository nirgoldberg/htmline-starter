<?php
/**
 * Scripts and styles
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action( 'login_enqueue_scripts',	'htmline_login_scripts_n_styles' );
add_action( 'admin_enqueue_scripts',	'htmline_admin_scripts_n_styles' );
add_action( 'wp_enqueue_scripts',		'htmline_wp_scripts_n_styles' );

add_filter( 'mce_css', 'htmline_editor_style' );

/**
 * htmline_login_scripts_n_styles
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_login_scripts_n_styles() {

	wp_register_style( 'admin-login',	CSS_DIR . '/admin/login.css',			array(),				VERSION );

}

/**
 * htmline_admin_scripts_n_styles
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_admin_scripts_n_styles() {

	wp_register_style( 'admin-general',	CSS_DIR . '/admin/general.css',			array(),				VERSION );

}

/**
 * htmline_wp_scripts_n_styles
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_wp_scripts_n_styles() {

	/**
	 * Styles
	 */
	wp_enqueue_style ( 'bootstrap',		CSS_DIR . '/libs/bootstrap.min.css',	array(),				VERSION );
	wp_enqueue_style ( 'jquery-ui',		CSS_DIR . '/libs/jquery-ui.min.css',	array('bootstrap'),		VERSION );
	wp_enqueue_style ( 'general',		CSS_DIR . '/general.css',				array('bootstrap'),		VERSION );

	/**
	 * Scripts
	 */
	wp_register_script( 'bootstrap',	JS_DIR . '/libs/bootstrap.min.js',		array('jquery'),		VERSION,	true );
	wp_register_script( 'jquery-ui',	JS_DIR . '/libs/jquery-ui.min.js',		array('bootstrap'),		VERSION,	true );
	wp_register_script( 'general',		JS_DIR . '/min/general.min.js',			array('bootstrap'),		VERSION,	true );

}

/**
 * htmline_editor_style
 *
 * This function adds styles for tinyMCE
 *
 * @since		1.0.0
 * @param		$styles (string) tinyMCE styles
 * @return		(string)
 */
function htmline_editor_style( $styles ) {

	$styles .= ', ' . CSS_DIR . '/admin/' . 'editor.css';

	// Google Fonts
	global $google_fonts;

	if ( $google_fonts ) {
		foreach ( $google_fonts as $key => $val ) {
			$font = str_replace( ',', '&#44', $val );
			$styles .= ', ' . $font;
		}
	}

	// return
	return $styles;

}