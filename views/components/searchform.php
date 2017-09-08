<?php
/**
 * The template for displaying the search form
 *
 * @author		HTMLine
 * @package		htmline-starter/views/components
 * @since		1.0.0
 * @version		1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Variables
 */
$search_string	= __( 'Search...',	'htmline' );
$search_btn		= __( 'Search',		'htmline' );

?>

<form method="get" action="<?php echo HOME; ?>">

	<input type="text" class="search-field <?php echo ( isset( $_GET['s'] ) && $_GET['s'] ) ? 'active' : ''; ?>" placeholder="<?php echo $search_string; ?>" value="<?php echo ( isset( $_GET['s'] ) && $_GET['s'] ) ? $_GET['s'] : ''; ?>" name="s" />
	<div class="search-submit-wrapper">
		<input type="submit" class="search-submit" value="<?php echo $search_btn; ?>" title="<?php echo $search_string; ?>" alt="<?php echo $search_string; ?>" />
	</div>

</form>