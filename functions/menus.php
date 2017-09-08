<?php
/**
 * Menus
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * htmline_register_menus
 *
 * This function registers theme menus
 *
 * @since		1.0.0
 * @param		N/A
 * @return		N/A
 */
function htmline_register_menus() {

	/**
	 * Variables
	 */
	global $globals;

	$menus = array(
		'main-menu'	=> __( 'Main Menu', 'htmline' )
	);

	$globals[ 'theme_menus' ] = apply_filters( 'htmline_register_menus', $menus );

	register_nav_menus( $globals[ 'theme_menus' ] );

}
add_action( 'init', 'htmline_register_menus' );