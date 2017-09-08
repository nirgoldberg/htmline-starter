<?php
/**
 * The template for displaying the Left Sidebar
 *
 * @author		HTMLine
 * @package		htmline-starter/views/sidebar
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Set sidebar to display
 */
$sidebar = apply_filters( 'htmline_default_sidebar', 'sidebar' );

if ( is_active_sidebar( $sidebar ) ) : ?>

	<div class="sidebar-content">

		<?php
			/**
			 * Display the 'sidebar' area
			 */
			dynamic_sidebar( $sidebar );
		?>

	</div><!-- .sidebar-content -->

<?php endif;