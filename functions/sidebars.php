<?php
/**
 * Sidebars
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * htmline_register_sidebars
 *
 * This function registers theme sidebars
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_register_sidebars() {

	$sidebars = array(
		array(
			// Sidebar
			'id'			=> 'sidebar',
			'name'			=> 'Sidebar',
			'description'	=> 'Theme default sidebar',
			'before_widget'	=> '<div class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widgettitle">',
			'after_title'	=> '</h2>'
		)
	);

	$sidebars = apply_filters( 'htmline_register_sidebars', $sidebars );

	// Register sidebars
	if ( $sidebars ) {
		foreach ( $sidebars as $sidebar ) {
			register_sidebar( $sidebar );
		}
	}

}
add_action( 'widgets_init', 'htmline_register_sidebars' );