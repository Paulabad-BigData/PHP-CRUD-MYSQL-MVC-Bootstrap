<?php

//  Channels all data sent

// Validation method $_GET with action
// Data channels information

$controller="page";
$action="home";


if( isset($_GET['controller']) && isset($_GET['action'])){

    if( ($_GET['controller']!="") && ($_GET['action']!="") ){
        $controller=$_GET['controller'];
        $action=$_GET['action'];
    }

    

    // Testing
    /* Knowing it arrives
    print_r($_GET);
    print_r($controller);
    print_r($action);
    */
}

require_once("view/template.php");

?>