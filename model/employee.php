<?php

class Employee{

    public $id;
    public $nombre;
    public $correo;
    public function __construct($id,$nombre,$correo){

        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
    }

    public static function consult(){

        $ListEmployees=[];
        $connectionDB=DB::createInstance();
        $sql= $connectionDB->query("SELECT * FROM employees");

        foreach($sql->fetchAll() as $employee){

            $ListEmployees[]= new Employee($employee['id'],$employee['nombre'],$employee['correo']);
        }
        return $ListEmployees;

    }


    // Model for interacting with the DB and entering the DB
    public static function create($nombre, $correo){

        $connectionDB=DB::createInstance();

        $sql= $connectionDB->prepare("INSERT INTO employees(nombre, correo) VALUES(?,?)");
        $sql->execute(array($nombre,$correo));
    }

    public static function delete($id){
        $connectionDB=DB::createInstance();
        
        $sql= $connectionDB->prepare("DELETE FROM employees WHERE id=? ");
        $sql->execute(array($id));
    }

    public static function search($id){
        $connectionDB=DB::createInstance();
        
        $sql= $connectionDB->prepare("SELECT * FROM employees WHERE id=? ");
        $sql->execute(array($id));
        $employee=$sql->fetch();
        return new Employee($employee['id'],$employee['nombre'],$employee['correo']);
    }

    public static function edit($id,$nombre,$correo){

        $connectionDB=DB::createInstance();

        $sql= $connectionDB->prepare("UPDATE employees SET nombre=?, correo=? WHERE id=? ");
        $sql->execute(array($nombre,$correo,$id));
    }
}


?>