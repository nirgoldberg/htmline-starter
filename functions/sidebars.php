<?php
/**
 * Sidebars
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.0
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

	// Left sidebar
	register_sidebar(
		array(
			'id'			=> 'left-sidebar',
			'name'			=> 'Left Sidebar',
			'description'	=> '',
			'before_widget'	=> '<div class="widget %2$s">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widgettitle">',
			'after_title'	=> '</h2>'
		)
	);

}
add_action( 'widgets_init', 'htmline_register_sidebars' );