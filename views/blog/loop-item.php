<?php
/**
 * The template for displaying post within loop
 *
 * @author		HTMLine
 * @package		htmline-starter/views/blog
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-header">

		<?php
			/**
			 * Display the post title
			 */
			the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>

	</div><!-- .post-header -->

	<?php
		/**
		 * Display the post featured image
		 */
		get_template_part( 'views/components/featured-image' );
	?>

	<div class="post-content">

		<?php
			/**
			 * Display the post excerpt
			 */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'htmline' ),
				get_the_title()
			) );
		?>

	</div><!-- .post-content -->

</article><!-- #post-## -->