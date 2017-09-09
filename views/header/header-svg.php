<?php
/**
 * The template for displaying the SVG sprite
 *
 * @author		HTMLine
 * @package		htmline-starter/views/header
 * @since		1.0.1
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Variables
 */
$svg_sprite = apply_filters( 'htmline_svg_sprite', THEME_ROOT . '/images/general/svg-defs.svg' );

/**
 * Display SVG sprite
 */
include_once( $svg_sprite );