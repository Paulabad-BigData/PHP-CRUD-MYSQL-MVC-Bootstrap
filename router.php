<?php

/* Testing 
echo $controller;
echo $action;
*/

// Access Controller

include_once("controller/controller_".$controller.".php");

$objController="Controller".ucfirst($controller);

// Create instance ControllerPage
$controller = new $objController();

// Access action home
$controller->$action();



?>