<?php
/**
 * The template for displaying 404 page
 *
 * @author		HTMLine
 * @package		htmline-starter/views/page
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<div class="content-section page-404 row">

	<h1><?php _e( '404', 'htmline' ); ?></h2>
	<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'htmline' ); ?></p>

	<?php get_search_form(); ?>

</div><!-- .page-404 -->