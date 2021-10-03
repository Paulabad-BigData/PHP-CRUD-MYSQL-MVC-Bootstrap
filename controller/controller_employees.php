<?php

include_once("model/employee.php");
include_once("connection.php");

DB::createInstance();

class ControllerEmployees{

    public function home(){

        $employees=Employee::consult();

        include_once("view/employees/home.php");

    }

    public function create()
    {
        if($_POST){
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            Employee::create($nombre,$correo);
            header("Location:./?controller=employees&action=home");
        }
        include_once("view/employees/create.php");
    }

    public function edit()
    {

        if($_POST){

            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];

            Employee::edit($id,$nombre,$correo);

            header("Location:./?controller=employees&action=home");
        }

        $id=$_GET['id'];

        $employee=(Employee::search($id));

        include_once("view/employees/edit.php");
    }

    public function delete(){

        print_r($_GET);
        $id=$_GET['id'];
        Employee::delete($id);
        header("Location:./?controller=employees&action=home");
    }
}

?>