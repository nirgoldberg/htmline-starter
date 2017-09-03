<?php
/**
 * The template for displaying the post featured image
 *
 * @author		HTMLine
 * @package		htmline-starter/views/components
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( has_post_thumbnail() ) : ?>

	<div class="featured-image">

		<?php
			/**
			 * Display the HTML image tag
			 */
			the_post_thumbnail();
		?>

	</div><!-- .featured-image -->

<?php endif;