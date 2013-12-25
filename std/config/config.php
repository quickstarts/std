<?php
if (file_exists(APPROOT. "config/production.php"))
    $env_settings = require(APPROOT. "config/production.php");
else
    $env_settings = require(APPROOT. "config/development.php");

return array_merge(
    array(
        'name' => 'STD',
        'view' => new \Slim\Views\Twig(),
        'templates.path' => APPROOT. '/templates',
        'cookies.secure' => true,
        'cookies.lifetime' => '30 days',
        'cookies.cipher' => MCRYPT_RIJNDAEL_256,
        'cookies.cipher_mode' => MCRYPT_MODE_CBC,
        'http.version' => '1.1',
    ),
    $env_settings);