<?php
/**
 * Admin header tweaks
 *
 * @author		HTMLine
 * @package		htmline-starter/functions/admin
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * htmline_admin_head
 *
 * This function loads scripts and styles on admin
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_admin_head() {

	wp_enqueue_style( 'admin-general' );

}
add_action( 'admin_head', 'htmline_admin_head' );