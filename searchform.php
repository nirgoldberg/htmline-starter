<?php
/**
 * The template for displaying the search form
 *
 * @author		HTMLine
 * @package		htmline-starter
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<div class="content-section search-form">

	<?php
		/**
		 * Display the search form
		 */
		get_template_part( 'views/components/searchform' );
	?>

</div><!-- .search-form -->