<?php
/**
 * Admin login tweaks
 *
 * @author		HTMLine
 * @package		htmline-starter/functions/admin
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * htmline_login_screen
 *
 * This function enqueues login screen style
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_login_screen() {

	wp_enqueue_style( 'admin-login' );

}
add_action( 'login_head', 'htmline_login_screen' );

/**
 * htmline_login_logo_url
 *
 * This function sets login logo URL
 *
 * @since		1.0.0
 * @param		N/A
 * @return		(string)
 */
function htmline_login_logo_url() {

	/**
	 * Variables
	 */
	$output = HOME;

	// return
	return apply_filters( 'htmline_login_logo_url', $output );

}
add_filter( 'login_headerurl', 'htmline_login_logo_url' );

/**
 * htmline_login_logo_url_title
 *
 * This function sets login logo title
 *
 * @since		1.0.0
 * @param		N/A
 * @return		(string)
 */
function htmline_login_logo_url_title() {

	/**
	 * Variables
	 */
	$output = get_bloginfo( 'name' );

	// return
	return apply_filters( 'htmline_login_logo_url_title', $output );

}
add_filter( 'login_headertitle', 'htmline_login_logo_url_title' );