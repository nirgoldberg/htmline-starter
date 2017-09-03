<?php
/**
 * The template for displaying the search page
 *
 * @author		HTMLine
 * @package		htmline-starter/views/page
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<div class="content-section archive-items search-results row">

	<?php
		/**
		 * Display the items found
		 */
		get_template_part( 'views/blog/loop' );
	?>

</div><!-- .archive-items.search-results -->