<?php  
session_start();

if(isset($_POST['submit'])){
    $title = isset($_POST['title']) ? trim($_POST['title']) : false;
    $description = isset($_POST['description']) ? trim($_POST['description']) : false;
    $category = trim($_POST['category']);
    $userId = $_SESSION['user']['id'];
    $postId = isset($_GET['edit']) ? $_GET['edit'] : false;


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
        if(isset($_GET['edit'])){
            $statement = $conexion->prepare('UPDATE posts SET title = :title, decription=:description, category_id=:category_id WHERE id = :idPost AND user_id = :user_id');
            $statement =$statement->execute(array(
                ':title' => $title,
                ':description' => $description,
                ':category_id' => $category,
                ':idPost' => $postId,
                ':user_id' => $userId
            ));
        } else {
            $statement = $conexion->prepare('INSERT INTO posts (user_id, category_id, title, decription, date) VALUES (:user_id, :category_id, :title, :description, CURDATE())');
            $statement =$statement->execute(array(
                ':user_id' => $userId,
                ':category_id' => $category,
                ':title' => $title,
                ':description' => $description
            ));

        }
       
        if($statement){
            header('location: index.php');
        } else {
            $error ['title'] = "Error al agregar el post";
            if(isset($_GET['edit'])){
                header('location: editPost.php?p='.$postId);
                
            } else {
                header('location: createPost.php');
            }

        }
    } else {
        if(isset($_GET['edit'])){
            header('location: editPost.php?p='.$postId);
            
        } else {
            header('location: createPost.php');
        }
    }
}