<?php
/**
 * Admin login tweaks
 *
 * @author		HTMLine
 * @package		htmline-starter/functions/admin
 * @since		1.0.0
 * @version		1.0.0
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

	// return
	return HOME;

}
add_filter( 'login_headerurl', 'htmline_login_logo_url' );

/**
 * htmline_login_logo_url_title
 *
 * This function Sets login logo title
 *
 * @since		1.0.0
 * @param		N/A
 * @return		(string)
 */
function htmline_login_logo_url_title() {

	// return
	return get_bloginfo( 'name' );

}
add_filter( 'login_headertitle', 'htmline_login_logo_url_title' );