<?php 

if (isset($_POST['register'])){

    require_once('includes/conexion.php');

    $name = isset($_POST['name']) ? trim($_POST['name']) : false;
    $surname = isset($_POST['surname']) ? trim($_POST['surname']) : false;
    $email = isset($_POST['email']) ? trim($_POST['email']) : false;
    $password = isset($_POST['password']) ? trim($_POST['password']) : false;

    //VALIDAR DATOS
    $error = [];
    $success = [];

    if(empty($name) || is_numeric($name) || preg_match('/[0-9]/', $name)){
        $error['name'] = "El nombre es invalido";
    } else {
        $success['name'] = $name;
    }

    if(empty($surname) || is_numeric($surname) || preg_match('/[0-9]/', $surname)){
        $error['surname'] = "El apellido es invalido";
    } else {
        $success['surname'] = $surname;
    }

    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['email'] = "El email es invalido";
    } else {
        $success['email'] = $email;
    }

    if(empty($password)){
        $error['password'] = "La contraseña esta vacia";
    }


    if(empty($error)){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $statement = $conexion->prepare('INSERT INTO users (name, surname, email, password, date) VALUES (:name, :surname, :email, :password, CURDATE())');
        $statement = $statement->execute(array(
            ':name'=>$name,
            ':surname'=>$surname,
            ':email'=>$email,
            ':password'=>$password
        ));

        if($statement){
            $_SESSION['success']['register'] = 'Usuario registrado exitosamente';
        } else {
            $_SESSION['error']['register'] = 'Error al registrar usuario en a la base de datos';
        }

    }else{
        $_SESSION['error'] = $error;
        $_SESSION['success'] = $success;
    }
    header('location: index.php');
}