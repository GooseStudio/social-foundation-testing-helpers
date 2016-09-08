<?php
/**
 * Copies the plugin files into the mu plugin root folder
 */
$mu_root = dirname(dirname(__DIR__));
$plugin_root = dirname(__DIR__);
$files = ['module-activator.php', 'plugin-activator.php'];
array_map(
    function ($file) use ($mu_root, $plugin_root) {
        if (file_exists($mu_root . DIRECTORY_SEPARATOR . $file)) {
            @unlink($mu_root . DIRECTORY_SEPARATOR . $file);
        }
        copy($plugin_root . DIRECTORY_SEPARATOR . $file, $mu_root . DIRECTORY_SEPARATOR . $file);
    },
    $files
);
