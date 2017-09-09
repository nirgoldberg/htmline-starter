<?php
/**
 * Theme header
 *
 * Contains the theme wrapper start
 *
 * @author		HTMLine
 * @package		htmline-starter
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
	/**
	 * Display header meta
	 */
	get_template_part( 'views/header/header', 'meta' );
?>

<body <?php body_class(); ?>>

<?php
	/**
	 * htmline_after_opening_body hook
	 */
	do_action( 'htmline_after_opening_body' );
?>

<?php
	/**
	 * Display SVG sprite
	 */
	get_template_part( 'views/header/header', 'svg' );
?>

<div id="page" class="site">

<?php

	/**
	 * Display header
	 */
	get_template_part( 'views/header/header' );

?>

<?php
	/**
	 * htmline_before_page_content hook
	 *
	 * @hooked	htmline_theme_wrapper_start - 10 (outputs opening divs for the page)
	 */
	do_action( 'htmline_before_page_content' );
?>

<?php
	/**
	 * htmline_sidebar
	 *
	 * @hooked	htmline_get_sidebar - 10 (outputs sidebar)
	 */
	do_action( 'htmline_sidebar' );
?>

<?php
	/**
	 * htmline_before_main_content hook
	 *
	 * @hooked	htmline_theme_content_wrapper_start - 10 (outputs opening divs for the main content)
	 */
	do_action( 'htmline_before_main_content' );
?>