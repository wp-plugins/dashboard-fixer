=== Dashboard Fixer ===
Contributors: Viper007Bond
Donate link: http://www.viper007bond.com/donate/
Tags: dashboard, fatal error, error
Requires at least: 2.5.0
Tested up to: 2.5.0
Stable tag: trunk

Fixes a fatal error message on the dashboard.

== Description ==

Some people have been experiencing an error message on their WordPress 2.5.0 dashboard. This is due to their dashboard widget options getting corrupted. This plugin resets those options so you can use your dashboard again.

`Fatal error: Cannot use string offset as an array in
[...]/wp-admin/includes/dashboard.php on line 46`
.

Just upload and activate this plugin and it'll fix it.

**You only need to use this plugin if you are getting the above error message.** Using this plugin will **NOT** prevent the error from occuring.

This plugin is ONLY for WordPress 2.5.0. The issue has [been fixed](http://trac.wordpress.org/changeset/7722) for WordPress 2.5.1.

== Installation ==

###Installing The Plugin###

Extract all files from the ZIP file and then upload it to `/wp-content/plugins/`.

Open up your browser and type in the URL to your admin area and then "plugins.php", like this:

`http://yoursite.com/path/to/wordpress/wp-admin/plugins.php`

Scroll down and activate the plugin. It'll fix your error and then automatically deactivate.

**See Also:** ["Installing Plugins" article on the WP Codex](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins)