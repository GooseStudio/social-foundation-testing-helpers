<?php
/*
Plugin Name: Acceptance testing helper
Plugin URI: http://docs.socialfoundation.io/plugins/plugin-activator
Description: Used during acceptance testing. Activates and deactivates plugins without login requirement.
 DO NOT use on a live/production site.
Version: 1.0
License: GPL-2.0
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Author: Andreas Nurbo
Author URI: http://goose.studio/
*/

add_action('init', function () {
    if (isset($_GET['activate_plugin'])) {
        $plugin = $_GET['activate_plugin'];
        $plugins = explode(',', $plugin);
        include_once(ABSPATH . '/wp-admin/includes/plugin.php');
        activate_plugins($plugins);
    }
    if (isset($_GET['deactivate_plugin'])) {
        $plugin = $_GET['deactivate_plugin'];
        $plugins = explode(',', $plugin);
        include_once(ABSPATH . '/wp-admin/includes/plugin.php');
        deactivate_plugins($plugins);
    }

    if (isset($_GET['activate_plugin']) || isset($_GET['deactivate_plugin'])) {
        exit;
    }
});
