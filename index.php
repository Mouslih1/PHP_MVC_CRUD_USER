<?php

use Controllers\userController;

/*
require_once("controllers/Controller.php");
require_once("controllers/userController.php");
require_once("Application.php");
*/

require_once("autoload.php");
\Application::process();
/*$controller = new userController();
if(isset($_GET['action']))
{
    $action = $_GET['action'];
    switch($action)
    {
        case 'index':
            $controller->indexAction();
            break;
        case 'create':
            $controller->createAction();
            break;
        case 'store':
            $controller->storeAction();
            break;
        case 'edit':
            $controller->editAction();
            break;
        case 'update':
            $controller->updateAction();
            break;
        case 'delete':
            $controller->deleteAction();
            break;
        case 'destroy':
            $controller->destroyAction();
            break;
    }
}*/