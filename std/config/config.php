<?php

return array(
    'name' => 'std',
    'view' => new \Slim\Views\Twig(),
    'templates.path' => APPROOT. '/templates',
    'cookies.secure' => true,
    'cookies.lifetime' => '30 days',
    'cookies.cipher' => MCRYPT_RIJNDAEL_256,
    'cookies.cipher_mode' => MCRYPT_MODE_CBC,
    'http.version' => '1.1',
);
