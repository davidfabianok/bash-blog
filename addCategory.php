<?php  
session_start();

if(isset($_POST['submit'])){
    $category = isset($_POST['category']) ? trim($_POST['category']) : false;
    $error = [];
    if(empty($category)){
        $error ['category'] = "El nombre de la categoria es invalido";
    }

    $_SESSION['error'] = $error;
    if(empty($error)){
        require_once('includes/conexion.php');
        $statement = $conexion->prepare('INSERT INTO categories (name) VALUES (:category)');
        $statement->execute(array(
            ':category' => $category
        ));

        header('location: index.php');
    } else {
        header('location: createCategory.php');
    }
}