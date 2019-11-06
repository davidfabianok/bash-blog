<?php 
require_once('includes/conexion.php');
function deleteAlert(){
    $_SESSION['error'] = null;
    $_SESSION['success'] = null;
    if(isset($_SESSION['error'])){
        session_unset($_SESSION['error']);
    }
    if($_SESSION['success']){
        session_unset($_SESSION['success']);
    }
    
}

function categories($conexion){
    $statement = $conexion->prepare('SELECT * FROM categories');
    $statement->execute();
    $categories = $statement->fetchAll();

    if($categories){
        return $categories;
    } else {
        return false;
    }  
}

function posts($conexion){
    $statement = $conexion->prepare('SET lc_time_names = "es_ES"');
    $statement->execute();
    $statement = $conexion->prepare('SELECT p.*, c.name AS category, DATE_FORMAT(date, "%W %e %M %Y") AS date FROM posts p INNER JOIN categories c ON c.id = p.category_id ORDER BY p.id DESC LIMIT 6');
    $statement->execute();
    $posts = $statement->fetchAll();

    if($posts){
        return $posts;
    } else {
        return false;
    }
}

