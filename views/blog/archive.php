<?php
/**
 * The template for displaying the blog archive
 *
 * @author		HTMLine
 * @package		htmline-starter/views/blog
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! is_category() )
	// return
	return;

?>

<div class="content-section archive-items row">

	<?php
		/**
		 * htmline_before_blog_loop hook
		 */
		do_action( 'htmline_before_blog_loop' );
	?>

	<?php
		/**
		 * Display the category items
		 */
		get_template_part( 'views/blog/loop' );
	?>

	<?php
		/**
		 * htmline_after_blog_loop hook
		 */
		do_action( 'htmline_after_blog_loop' );
	?>

</div><!-- .archive-items -->