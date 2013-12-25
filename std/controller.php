<?php

function init_controllers($app){

    $controllers = array('master.php');

    foreach ($controllers as $ctl) {
        $ctler = require(APPROOT . "controllers/" . $ctl);
        $func = $ctler["export"];
        $func($app);
    }

}
