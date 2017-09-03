<?php
/**
 * Categories
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * htmline_unlimit_posts_per_archive_page
 *
 * This function modifies number of posts to display per archive page to be unlimited
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_unlimit_posts_per_archive_page() {

	set_query_var( 'posts_per_archive_page', '-1' );

}
add_filter( 'pre_get_posts', 'htmline_unlimit_posts_per_archive_page' );