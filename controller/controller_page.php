<?php

class ControllerPage{
    // Two methods with functions are declared with the objects Home and error

    public function home(){

        // The method is entered and the home view is loaded so that it can be displayed.
        include_once("view/page/home.php");

    }

    public function error(){
        
        // The method is entered and the error view is loaded so that it can be displayed.
        include_once("view/page/error.php");


    }
}


?>