<?php 
require_once('includes/helpers.php');

if (isset($_POST['update'])){

    require_once('includes/conexion.php');

    $name = isset($_POST['name']) ? trim($_POST['name']) : false;
    $surname = isset($_POST['surname']) ? trim($_POST['surname']) : false;
    $email = isset($_POST['email']) ? trim($_POST['email']) : false;
    $idUser = $_SESSION['user']['id'];

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
        if($email != $_SESSION['user']['email']){
            $statement = $conexion->prepare('SELECT id, name FROM users WHERE email= :email LIMIT 1');
            $statement->execute(array(
                ':email'=>$email
            ));
            $user = $statement->fetch();
        
            if($user){
                $error['email'] = "El email esta en uso"; 
            }
        }
        
        $success['email'] = $email;
    }

    $_SESSION['error'] = $error;
    $_SESSION['success'] = $success;

    if(empty($error)){

        $statement = $conexion->prepare('UPDATE users SET name=:name, surname=:surname, email=:email WHERE  id=:idUser');
        $statement = $statement->execute(array(
            ':name'=>$name,
            ':surname'=>$surname,
            ':email'=>$email,
            ':idUser'=>$idUser
        ));

        if($statement){
            $_SESSION['success']['update'] = 'Se guardaron los cambios';
            $statement = $conexion->prepare('SELECT * FROM users WHERE id=:idUser LIMIT 1');
            $statement->execute(array(
                ':idUser' => $idUser
            ));
            $_SESSION['user'] = $statement->fetch();
            header('location: ../index.php');
        } else {
            $_SESSION['error']['update'] = 'No se pudieron guardar los cambios';
        }

    }else{
        $_SESSION['error'] = $error;
        $_SESSION['success'] = $success;
    }
    header('location: editProfile.php');
}