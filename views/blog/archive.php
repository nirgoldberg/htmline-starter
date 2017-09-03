<?php
/**
 * The template for displaying the blog archive
 *
 * @author		HTMLine
 * @package		htmline-starter/views/blog
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! is_category() )
	// return
	return;

?>

<div class="content-section archive-items row">

	<?php
		/**
		 * Display the category items
		 */
		get_template_part( 'views/blog/loop' );
	?>

</div><!-- .archive-items -->