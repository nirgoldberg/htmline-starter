<?php
/**
 * The template for displaying the blog archive loop
 *
 * @author		HTMLine
 * @package		htmline-starter/views/blog
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( have_posts() ) : ?>

	<div class="col-sm-12">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/**
				 * htmline_before_blog_item hook
				 */
				do_action( 'htmline_before_blog_item' );
			?>

			<?php
				/**
				 * Display the item
				 */
				get_template_part( 'views/blog/loop', 'item' );
			?>

			<?php
				/**
				 * htmline_after_blog_item hook
				 */
				do_action( 'htmline_after_blog_item' );
			?>

		<?php endwhile; ?>

	</div>

<?php else : ?>

	<div class="not-found-wrapper col-sm-12">

		<?php
			/**
			 * Not found
			 */
			get_template_part( 'views/components/not-found' );
		?>

	</div><!-- .not-found-wrapper -->

<?php endif; ?>