<?php

define('VIEW_PATH', 'views/');
define('CONTROLLERS', 'controllers/');

$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default';
switch($action){
    default:
        require_once ('controllers/HomeController.php');
        $controller = new HomeController();
        break;
}

$controller->run();