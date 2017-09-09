<?php
/**
 * The template for displaying the head
 *
 * @author		HTMLine
 * @package		htmline-starter/views/header
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Google Fonts -->
	<?php

		global $globals;

		if ( $globals[ 'google_fonts' ] ) {
			foreach ( $globals[ 'google_fonts' ] as $key => $val ) {
				printf ( "<link href='%s' rel='stylesheet'>", $val );
			}
		}

	?>

	<?php wp_head(); ?>

	<?php
		/**
		 * htmline_before_closing_head hook
		 */
		do_action( 'htmline_before_closing_head' );
	?>

</head>