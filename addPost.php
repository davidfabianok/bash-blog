<?php  
session_start();

if(isset($_POST['submit'])){
    $title = isset($_POST['title']) ? trim($_POST['title']) : false;
    $description = isset($_POST['description']) ? trim($_POST['description']) : false;
    $category = trim($_POST['category']);
    $userId = $_SESSION['user']['id'];


    $error = [];
    if(empty($title)){
        $error ['title'] = "Agrega una titulo al post ";
    }
    if(empty($description)){
        $error ['description'] = "Agrega una descripcion al post";
    }
    if(empty($category) || !is_numeric($category)){
        $error ['category'] = "Categoria invalida";
    }
    $_SESSION['error'] = $error;
   
    if(empty($error)){
        require_once('includes/conexion.php');
        $statement = $conexion->prepare('INSERT INTO posts (user_id, category_id, title, decription, date) VALUES (:user_id, :category_id, :title, :description, CURDATE())');
        $statement =$statement->execute(array(
            ':user_id' => $userId,
            ':category_id' => $category,
            ':title' => $title,
            ':description' => $description
        ));
        if($statement){
            header('location: index.php');
        } else {
            $error ['title'] = "Error al agregar el post";
            header('location: createPost.php');
        }
    } else {
        header('location: createPost.php');
    }
}