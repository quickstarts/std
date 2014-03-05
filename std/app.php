<?php

use \Utils;

require_once(APPROOT . "extensions.php");
$config = require_once(APPROOT . 'config/config.php');

// Require all controllers. But some controllers need to be merged or removed
$controllers = array (
    'home_app' => Utils::require_controller('master/home'),
);

// Create app using factory.
function create_app ($config_files=array()) {
    if(!is_array($config_files))
        exit('Config Files are not array.');

    $app = new Slimx();

    global $config;
    $app->config($config);
    foreach($config_files as $cfil){
        $app->config(require_once($cfil));
    }

    setup_hooks($app);
    setup_views($app);

    // Register all controllers in global variable $controllers
    global $controllers;
    extract($controllers);

    $app->register_controller($home_app);

    return $app;
}
