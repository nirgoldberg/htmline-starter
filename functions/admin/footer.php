<?php
/**
 * Admin footer tweaks
 *
 * @author		HTMLine
 * @package		htmline-starter/functions/admin
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * htmline_footer_text
 *
 * This function adds customized footer on admin
 *
 * @since		1.0.0
 * @param		N/A
 * @return		(string)
 */
function htmline_footer_text() {

	// return
	return "<span id=\"footer-thankyou\">By <a href=\"http://www.htmline.com/\">HTMLine</a>.</span>";

}
add_action( 'admin_footer_text', 'htmline_footer_text' );