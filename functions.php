<?php
/**
 * Functions
 *
 * @author		HTMLine
 * @package		htmline-starter
 * @since		1.0.0
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Theme configuration
require_once( 'functions/config.php' );

// Helpers
require_once( 'functions/helpers.php' );

// Theme
require_once( 'functions/theme.php' );

// Scripts and styles
require_once( 'functions/scripts-n-styles.php' );

// Admin login tweaks
require_once( 'functions/admin/login.php' );

if ( is_admin() ) {
	// Admin header tweaks
	require_once( 'functions/admin/header.php' );

	// Admin footer tweaks
	require_once( 'functions/admin/footer.php' );
}

// Sidebars
require_once( 'functions/sidebars.php' );

// Menus
require_once( 'functions/menus.php' );

// Categories
require_once( 'functions/categories.php' );

// Widgets
require_once( 'functions/widgets.php' );

// ACF configuration
require_once( 'functions/acf/acf-configuration.php' );

if ( ! defined( 'USE_LOCAL_ACF_CONFIGURATION' ) || ! USE_LOCAL_ACF_CONFIGURATION ) {
	// ACF Field Groups
	require_once( 'functions/acf/acf-field-groups.php' );
}