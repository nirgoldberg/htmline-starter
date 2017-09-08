<?php
/**
 * Theme footer
 *
 * Contains the theme wrapper end
 *
 * @author		HTMLine
 * @package		htmline-starter
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Variables
 */
global $globals;

?>

<?php
	/**
	 * htmline_after_main_content hook
	 *
	 * @hooked	htmline_theme_content_wrapper_end - 10 (outputs closing divs for the main content)
	 */
	do_action( 'htmline_after_main_content' );
?>

<?php
	/**
	 * htmline_after_page_content hook
	 *
	 * @hooked	htmline_theme_wrapper_end - 10 (outputs closing divs for the page)
	 */
	do_action( 'htmline_after_page_content' );
?>

<script>

	var js_globals = {};
	js_globals.template_url		= "<?php echo TEMPLATE; ?>";
	js_globals.page_template	= "<?php echo $globals[ 'page_template' ]; ?>";

</script>

<?php

	/**
	 * Display footer
	 */
	get_template_part( 'views/footer/footer' );

	/**
	 * Footer scripts
	 */
	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'jquery-ui' );
	wp_enqueue_script( 'general' );

	/**
	 * Child theme scripts
	 */
	if ( is_child_theme() && wp_script_is( 'child-general', 'registered' ) ) {
		wp_enqueue_script( 'child-general' );
	}

?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
