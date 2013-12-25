<?php

require_once(APPROOT . "rbac/roles.php");
$everyone = new EveryOne();
$localuser = new LocalUser();
$administrator = new Administrator();

return array(
    "allow" => array(
        array($everyone, "/", "*"),
    ),
    "deny" => array(
    )
);
