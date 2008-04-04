<?php /*

**************************************************************************

Plugin Name:  Dashboard Fixer
Plugin URI:   http://wordpress.org/extend/plugins/dashboard-fixer/
Description:  Fixes the <code>Fatal error: Cannot use string offset as an array in [...]/wp-admin/includes/dashboard.php on line 46</code> error message. For WordPress 2.5.0 <strong>ONLY</strong>.
Version:      1.0.0
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/

**************************************************************************

This plugin merely resets the "dashboard_widget_options" option.
You can do it manually via phpMyAdmin (delete the row) or just use this plugin.

**************************************************************************/

class DashboardFixer {

	// Plugin initialization
	function DashboardFixer() {
		add_action( 'admin_notices', array(&$this, 'DoTheStuff') );
	}


	// Dump the corrupted variable, say so, and deactivate
	function DoTheStuff() {
		global $wp_version;

		echo '<div class="updated"><p>';

		if ( '2.5' !== $wp_version ) {
			echo '<strong>Dashboard Fixer</strong> is not for your version of WordPress.';
		} else {
			update_option( 'dashboard_widget_options', array() );
			echo 'Your <a href="index.php">dashboard</a> should now be fixed.';
		}

		if ( function_exists('deactivate_plugins') ) 
			deactivate_plugins( 'dashboard-fixer/dashboard-fixer.php', 'dashboard-fixer.php' );

		echo ' This plugin has been automatically deactivated.</p></div>';
	}
}

// Start this plugin once all other files and plugins are fully loaded
add_action( 'plugins_loaded', create_function( '', 'global $DashboardFixer; $DashboardFixer = new DashboardFixer();' ) );

?>