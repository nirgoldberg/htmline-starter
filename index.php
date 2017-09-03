<?php
/**
 * The template for displaying default post/category/archive/page
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
	if ( have_posts() ) :
	
		while ( have_posts() ) : the_post();

			get_template_part( 'views/blog/single' );

		endwhile;
		
	else :
	
		get_template_part( 'views/components/not-found' );
		
	endif;
?>

<?php get_footer(); ?>