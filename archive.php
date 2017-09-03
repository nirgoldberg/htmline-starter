<?php
/**
 * The template for displaying blog archive page
 *
 * @author		HTMLine
 * @package		htmline-starter
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); ?>

<?php
	/**
	 * Content
	 */
	get_template_part( 'views/blog/archive' );
?>

<?php get_footer(); ?>