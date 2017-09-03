<?php
/**
 * The template for displaying Not Found message
 *
 * @author		HTMLine
 * @package		htmline-starter/views/components
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<div class="not-found">

	<h2 class="not-found-title"><?php _e( 'No records found', 'htmline' ); ?></h2>
	<p><?php printf('%s <a href="' . HOME . '">%s</a>', __( 'Return to', 'htmline' ), __( 'homepage', 'htmline' ) ); ?></p>

</div><!-- .not-found -->