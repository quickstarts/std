<?php


function setup_views ($app) {

    $twig_global = array('key' => 'value');
    
    $view = $app->view();
    $view->setTemplatesDirectory($app->config('templates.path'));

    $view_options = require_once(APPROOT . 'config/view.php');
    $view->parserOptions = $view_options;

    $view->parserExtensions = array(
        new \Slim\Views\TwigExtension(),
    );

    $twigEnv = $view->getEnvironment();
    foreach($twig_global as $key => $value){
        $twigEnv->addGlobal($key, $value);
    }
}
