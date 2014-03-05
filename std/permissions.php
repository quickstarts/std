<?php

use RBAC\Roles\EveryOne;
use RBAC\Roles\NormalUser;
use RBAC\Roles\Administrator;

$everyone = new EveryOne();
$normal = new NormalUser();
$administrator = new Administrator();

return array(
    "allow" => array(
        array($everyone, "/", "*"),
        array($everyone, "/signin", "*"),
    ),
    "deny" => array(
    )
);
