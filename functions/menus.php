<?php
/**
 * Menus
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Variables
 */
global $menus;

$menus = array(
	'main-menu'	=> __( 'Main Menu', 'htmline' )
);

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

	global $menus;
	register_nav_menus( $menus );

}
add_action( 'init', 'htmline_register_menus' );