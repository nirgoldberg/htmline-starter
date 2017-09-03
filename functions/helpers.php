<?php
/**
 * Helper functions
 *
 * @author		HTMLine
 * @package		htmline-starter/functions
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * htmline_maybe_get
 *
 * This function returns a variable if it exists in an array
 *
 * @since		1.0.0
 * @param		$array (array) The array to look within
 * @param		$key (key) The array key to look for
 * @param		$default (mixed) The value returned if not found
 * @return		(mixed)
 */
function htmline_maybe_get( $array, $key, $default = null ) {

	// Return default if does not exist
	if( ! isset( $array[ $key ] ) ) {

		// return
		return $default;

	}

	// return
	return $array[ $key ];

}