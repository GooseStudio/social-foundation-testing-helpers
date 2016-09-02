<?php
/*
Plugin Name: Social Foundation Acceptance testing helper
Plugin URI: http://docs.socialfoundation.io/plugins/module-activator
Description: Used during acceptance testing. Activates and deactivates
Social Foundation modules without login requirement. DO NOT use on a live/production site.
Version: 1.0
License: GPL-2.0
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Author: Andreas Nurbo
Author URI: http://goose.studio/
*/

use SocialFoundation\Core\Modules;

add_action('init', function () {
    if (isset($_GET['activate_module'])) {
        $module = $_GET['activate_module'];
        $modules = explode(',', $module);
        $m = Modules::instance();
        array_walk($modules, function ($module) use ($m) {
            $m->enable($module);
        });
    }
    if (isset($_GET['deactivate_module'])) {
        $module = $_GET['deactivate_module'];
        $modules = explode(',', $module);
        $m = Modules::instance();
        array_walk($modules, function ($module) use ($m) {
            $m->disable($module);
        });
    }

    if (isset($_GET['activate_module']) || isset($_GET['deactivate_module'])) {
        exit;
    }
}, 1000);
