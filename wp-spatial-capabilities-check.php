<?php
/**
 * Plugin Name: WP Spatial Capabilities Check
 * Description: Check what spatial functions your version of MySQL or MariaDB has available.
 * Plugin URI: https://github.com/cimburadotcom/wp-spatial-capabilities-check
 * Author: Michael Moore
 * Author URI: http://luminfire.com
 * Version: 0.0.4
 * Text Domain: wp-spatial-capabilities-check
 * Domain Path: /lang
 * License: GPLv2
 *
 * @package wp-spatial-capabilities-check
 */

add_action( 'admin_menu', 'wpscc_admin_menu' );

/**
 * Add the management page menu listing.
 */
function wpscc_admin_menu() {
	add_management_page( esc_html__( 'Spatial Capabilites', 'wp-spatial-capabilities-check' ), esc_html__( 'Spatial Capabilites','wp-spatial-capabilities-check' ), 'install_plugins', 'spatial-capabilites', 'wpscc_show_spatial_capabilites' );
}

/**
 * Query the database and determine what spatial functions are available.
 */
function wpscc_show_spatial_capabilites() {
	global $wpdb;

	$wpgm_loader = dirname( __FILE__ ) . '/wp-geometa-lib/wp-geometa-lib-loader.php';
	if ( file_exists( $wpgm_loader ) ){
		require_once( $wpgm_loader );
	} else {
		error_log( __( "Could not load wp-geometa-lib. You probably cloned wp-spatial-capabilities-check from git and didn't check out submodules!", 'wp-spatial-capabilities-check' ) );
		print esc_html__( "Could not load wp-geometa-lib. You probably cloned wp-spatial-capabilities-check from git and didn't check out submodules!", 'wp-spatial-capabilities-check' );
		return;
	}

	$capabilites_table = '<table class="spatialcapabilites"><tr><th>' . esc_html__( 'Function Name','wp-spatial-capabilities-check' ) . '</th><th>' . esc_html__( 'Function Exists?','wp-spatial-capabilities-check' ) . '</th></tr>';

	$our_capabilities = WP_GeoUtil::get_capabilities( true, false, false );

	foreach ( WP_GeoUtil::$all_funcs as $func ) {

		$capabilites_table .= '<tr><th>' . esc_html( $func ) . '</th>';
		if ( in_array( $func, $our_capabilities ) ) {
			$capabilites_table .= '<td class="hassupport">' . esc_html__( 'Yes','wp-spatial-capabilities-check' ) . '</td>';
		} else {
			$capabilites_table .= '<td class="lackssupport">' . esc_html__( 'No','wp-spatial-capabilities-check' ) . '</td>';
		}
		$capabilites_table .= '</tr>';
	}

	$capabilites_table .= '</table>';

	// Generate a table of MySQL information.
	$version_info = $wpdb->get_var( 'SELECT VERSION() as v' ); // @codingStandardsIgnoreLine

	include( dirname( __FILE__ ) . '/spatial-layout.php' );
}

add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wpscc_add_plugin_action_links' );

/**
 * Add a link to the plugins listing page to let admins check their database from there.
 *
 * @param array $links The links to show under the plugin name on the plugin page.
 */
function wpscc_add_plugin_action_links( $links ) {
	return array_merge(
		array(
			'checknow' => '<a href="' . get_bloginfo( 'wpurl' ) . '/wp-admin/tools.php?page=spatial-capabilites">' . esc_html__( 'Check Now','wp-spatial-capabilities-check' ) . '</a>',
		),
		$links
	);
}

add_action( 'plugins_loaded', 'wpscc_load_textdomain' );

/**
 * Set up the I18N path.
 */
function wpscc_load_textdomain() {
	load_plugin_textdomain( 'wp-spatial-capabilities-check', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
}
