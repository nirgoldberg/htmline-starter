<?php
/**
 * The template for displaying the Left Sidebar
 *
 * @author		HTMLine
 * @package		htmline-starter/views/sidebar
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( is_active_sidebar( 'left-sidebar' ) ) : ?>

	<div class="sidebar-content">

		<?php
			/**
			 * Display the 'left-sidebar' area
			 */
			dynamic_sidebar( 'left-sidebar' );
		?>

	</div><!-- .sidebar-content -->

<?php endif;