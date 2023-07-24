<?php


namespace Controllers;

/*
require_once("models/Model.php");
require_once("models/User.php");
*/

abstract class Controller
{
    protected $model;
    protected $modelName;

    public function __construct()
    {
        $this->model = new $this->modelName();
    }
}