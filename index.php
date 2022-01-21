<?php

define('VIEW_PATH', 'views/');
define('CONTROLLERS', 'controllers/');

require_once(VIEW_PATH . 'header.php');

$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default';
switch($action){
    default:
        require_once ('controllers/HomeController.php');
        $controller = new HomeController();
        break;
}

$controller->run();

require_once(VIEW_PATH . 'footer.php');