<?php
/*
Plugin Name: DcBackend
Description: PHP Codes for WordPress Customizations
Version: 1.0.0
Author: Donny Chen
Author URI: https://donnychen.dev
 */

require __DIR__ . '/DcBackend/vendor/autoload.php';

spl_autoload_register(function ($class_name) {
    if (strpos($class_name, 'DcBackend') != false) {
        $namespace_path = str_replace("Plugins\\", "", $class_name);
        $file_path      = str_replace("\\", "/", $namespace_path);
        $file_name = stream_resolve_include_path($file_path . ".php");
        if ($file_name !== false) {
            include $file_name;
        }
    }
});


