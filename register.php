<?php 
session_start();

if (isset($_POST['register'])){

    $name = isset($_POST['name']) ? $_POST['name'] : false;
    $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //VALIDAR DATOS
    $error = [];

    if(empty($name) || is_numeric($name) || preg_match('/[0-9]/', $name)){
        $error['name'] = "El nombre es invalido";
    }

    if(empty($surname) || is_numeric($surname) || preg_match('/[0-9]/', $surname)){
        $error['surname'] = "El apellido es invalido";
    }

    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['email'] = "El email es invalido";
    }

    if(empty($password)){
        $error['password'] = "La contraseña esta vacia";
    }


    if(empty($error)){
        
    }else{
        $_SESSION['error'] = $error;
        header('location: index.php');
    }
}