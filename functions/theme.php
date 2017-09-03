<?php
/**
 * Theme
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Theme wrapper
 */
add_action( 'htmline_before_page_content',	'htmline_theme_wrapper_start',			10 );
add_action( 'htmline_after_page_content',	'htmline_theme_wrapper_end',			10 );

add_action( 'htmline_before_sidebar',		'htmline_theme_sidebar_wrapper_start',	10 );
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

	echo '<section class="page-content"><div class="container"><div class="row">';

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

	echo '</div></div><!-- .container --></section><!-- .page-content -->';

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

	echo '<div class="sidebar-wrapper col-sm-3"><section class="sidebar">';

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

	echo '</section><!-- .sidebar --></div><!-- .sidebar-wrapper -->';

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

	echo '<div class="content-wrapper col-sm-9"><section class="content">';

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

	echo '</section><!-- .content --></div><!-- .content-wrapper -->';

}

/**
 * Globals
 */
global $globals;
$globals = array(

	'page_template'	=> ''

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