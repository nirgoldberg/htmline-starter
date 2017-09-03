<?php
/**
 * The template for displaying single post or default post/category/archive/page
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
			the_title( '<h1 class="post-title">', '</h1>' );
		?>

	</div><!-- .post-header -->

	<div class="post-content">

		<?php
			/**
			 * Display the post content
			 */
			the_content();
		?>

	</div><!-- .post-content -->

</article><!-- #post-## -->