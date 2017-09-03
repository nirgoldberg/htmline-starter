<?php
/**
 * The template for displaying default page
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
	if ( have_posts() ) : the_post();

		get_template_part( 'views/blog/single' );

	endif;
?>

<?php get_footer(); ?>