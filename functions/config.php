<?php
/**
 * Theme configuration
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Set VERSION constant - used to register styles and scripts
 */
if ( function_exists( 'wp_get_theme' ) ) {

	$theme_data		= wp_get_theme();
	$theme_version	= $theme_data->get( 'Version' );

}
else {

	$theme_data		= get_theme_data( trailingslashit( get_stylesheet_directory() ) . 'style.css' );
	$theme_version	= $theme_data[ 'Version' ];

}

define( 'VERSION', $theme_version );

/**
 * Other constants
 */
$stylesheet = get_stylesheet();
$theme_root = get_theme_root( $stylesheet );

define( 'TEMPLATE',			get_bloginfo( 'template_directory' ) );
define( 'STYLESHEET',		get_bloginfo( 'stylesheet_directory' ) );
define( 'THEME_ROOT',		"$theme_root/$stylesheet" );
define( 'HOME',				home_url( '/' ) );
define( 'CSS_DIR',			TEMPLATE . '/css' );
define( 'JS_DIR',			TEMPLATE . '/js' );
define( 'CHILD_CSS_DIR',	STYLESHEET . '/css' );
define( 'CHILD_JS_DIR',		STYLESHEET . '/js' );
define( 'WIDGETS_PATH',		THEME_ROOT . '/widgets' );

/**
 * htmline_load_theme_textdomain
 *
 * This function load theme text domain
 *
 * @since		1.0.1
 * @param		N/A
 * @return		N/A
 */
function htmline_load_theme_textdomain() {

	load_theme_textdomain( 'htmline', get_template_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'htmline_load_theme_textdomain' );

/**
 * htmline_google_fonts
 *
 * This function declares Google Fonts to be registered later
 *
 * @since		1.0.1
 * @param		N/A
 * @return		N/A
 */
function htmline_google_fonts() {

	/**
	 * Variables
	 */
	global $globals;

	$fonts = array(
		'Alef'	=> 'https://fonts.googleapis.com/css?family=Alef:400,700&amp;subset=hebrew'
	);

	$globals[ 'google_fonts' ] = apply_filters( 'htmline_google_fonts', $fonts );

}
add_action( 'init', 'htmline_google_fonts' );