<?php
/**
 * The template for displaying the sidebar
 *
 * @author		HTMLine
 * @package		htmline-starter
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<?php
	/**
	 * htmline_before_sidebar hook
	 *
	 * @hooked	htmline_theme_sidebar_wrapper_start - 10 (outputs opening divs for the sidebar)
	 */
	do_action( 'htmline_before_sidebar' );
?>

<?php
	/**
	 * Display the left sidebar
	 */
	get_template_part( 'views/sidebar/sidebar' );
?>

<?php
	/**
	 * htmline_after_sidebar hook
	 *
	 * @hooked	htmline_theme_sidebar_wrapper_end - 10 (outputs closing divs for the sidebar)
	 */
	do_action( 'htmline_after_sidebar' );
?>