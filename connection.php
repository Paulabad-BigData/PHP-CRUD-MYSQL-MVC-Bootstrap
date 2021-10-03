<?php

// Connection DB

class DB{

    // PDO connection DB: localhost, root, password
    // private declare variable $instance stores connection and allows functions CRUD
    private static $instance=NULL;

    // create instance from connection

    public static function createInstance(){

        if(!isset( self::$instance)){

            $optionsPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;

            self::$instance = new PDO('mysql:host=localhost;dbname=crudpmb','root','paula', $optionsPDO);

        }
        return self::$instance;
    }

}

?>