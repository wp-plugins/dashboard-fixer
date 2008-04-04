=== Dashboard Fixer ===
Contributors: Viper007Bond
Donate link: http://www.viper007bond.com/donate/
Tags: dashboard, fatal error, error
Requires at least: 2.5.0
Tested up to: 2.5.0
Stable tag: trunk

Fixes a fatal error message on the dashboard.

== Description ==

Some people have been experiencing an error message on their WordPress 2.5.0 dashboard. This is due to their dashboard widget options getting corrupted. This plugin resets those options.

`Fatal error: Cannot use string offset as an array in [...]/wp-admin/includes/dashboard.php on line 46`

Just upload and activate this plugin and it'll fix it.

This plugin will hopefully be (made obsolete)[http://trac.wordpress.org/ticket/6578] with the release of WordPress 2.5.1.

== Installation ==

###Installing The Plugin###

Extract all files from the ZIP file and then upload it to `/wp-content/plugins/`.

Then just visit your admin area and activate the plugin. It'll fix your error then.

**See Also:** ["Installing Plugins" article on the WP Codex](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins)