<?php
/**
 * Theme
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Theme wrapper
 */
add_action( 'htmline_before_page_content',	'htmline_theme_wrapper_start',			10 );
add_action( 'htmline_after_page_content',	'htmline_theme_wrapper_end',			10 );

add_action( 'htmline_before_sidebar',		'htmline_theme_sidebar_wrapper_start',	10 );
add_action( 'htmline_sidebar',				'htmline_get_sidebar',					10 );
add_action( 'htmline_after_sidebar',		'htmline_theme_sidebar_wrapper_end',	10 );

add_action( 'htmline_before_main_content',	'htmline_theme_content_wrapper_start',	10 );
add_action( 'htmline_after_main_content',	'htmline_theme_content_wrapper_end',	10 );

/**
 * htmline_theme_wrapper_start
 *
 * This function adds opening wrapper tags to the theme
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_theme_wrapper_start() {

	/**
	 * Variables
	 */
	$output = '<section class="page-content"><div class="container"><div class="row">';

	echo apply_filters( 'htmline_theme_wrapper_start', $output );

}

/**
 * htmline_theme_wrapper_end
 *
 * This function adds closing wrapper tags to the theme
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_theme_wrapper_end() {

	/**
	 * Variables
	 */
	$output = '</div></div><!-- .container --></section><!-- .page-content -->';

	echo apply_filters( 'htmline_theme_wrapper_end', $output );

}

/**
 * htmline_theme_sidebar_wrapper_start
 *
 * This function adds opening wrapper tags to the theme sidebar
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_theme_sidebar_wrapper_start() {

	/**
	 * Variables
	 */
	$output = '<div class="sidebar-wrapper col-sm-3"><section class="sidebar">';

	echo apply_filters( 'htmline_theme_sidebar_wrapper_start', $output );

}

/**
 * htmline_get_sidebar
 *
 * This function display the sidebar
 *
 * @since		1.0.1
 * @param		N/A
 * @return		N/A
 */
function htmline_get_sidebar() {

	/**
	 * get_sidebar
	 *
	 * Display the sidebar
	 */
	get_sidebar();

}

/**
 * htmline_theme_sidebar_wrapper_end
 *
 * This function adds closing wrapper tags to the theme sidebar
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_theme_sidebar_wrapper_end() {

	/**
	 * Variables
	 */
	$output = '</section><!-- .sidebar --></div><!-- .sidebar-wrapper -->';

	echo apply_filters( 'htmline_theme_sidebar_wrapper_end', $output );

}

/**
 * htmline_theme_content_wrapper_start
 *
 * This function adds opening wrapper tags to the theme content
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_theme_content_wrapper_start() {

	/**
	 * Variables
	 */
	$output = '<div class="content-wrapper col-sm-9"><section class="content">';

	echo apply_filters( 'htmline_theme_content_wrapper_start', $output );

}

/**
 * htmline_theme_content_wrapper_end
 *
 * This function adds closing wrapper tags to the theme content
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_theme_content_wrapper_end() {

	/**
	 * Variables
	 */
	$output = '</section><!-- .content --></div><!-- .content-wrapper -->';

	echo apply_filters( 'htmline_theme_content_wrapper_end', $output );

}

/**
 * Globals
 */
global $globals;
$globals = array(

	'google_fonts'	=> '',
	'page_template'	=> '',
	'theme_menus'	=> ''

);

/**
 * Theme supports
 */
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

/**
 * Remove WordPress defaults
 */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );