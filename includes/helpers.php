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

function category($conexion, $id){
    $statement = $conexion->prepare('SELECT * FROM categories WHERE id = :id LIMIT 1');
    $statement->execute(array(
        ':id'=>$id
    ));
    $category = $statement->fetch();

    return $category;
}

function posts($conexion, $limit = null, $category = null){
    $statement = $conexion->prepare('SET lc_time_names = "es_ES"');
    $statement->execute();
    $prepare = 'SELECT p.*, c.name AS category, DATE_FORMAT(date, "%W %e %M %Y") AS date FROM posts p INNER JOIN categories c ON c.id = p.category_id ';
    
    if($category){
        $prepare .= " WHERE c.name = '$category' ";
    }

    $prepare .= ' ORDER BY p.id DESC ';

    if($limit){
        $prepare .= " LIMIT $limit";
    }
    
    $statement = $conexion->prepare($prepare);

    $statement->execute();
    $posts = $statement->fetchAll();

    if($posts){
        return $posts;
    } else {
        return false;
    }
}
function post($conexion, $id){
    $statement = $conexion->prepare('SET lc_time_names = "es_ES"');
    $statement->execute();
    $statement = $conexion->prepare('SELECT p.*,CONCAT(u.name," ", u.surname) AS nameuser, c.name AS category, DATE_FORMAT(p.date, "%W %e %M %Y") AS date FROM posts p LEFT JOIN categories c ON c.id = p.category_id AND p.id = :id LEFT JOIN users u ON p.user_id = u.id ');
    $statement->execute(array(
        ':id'=>$id
    ));
    $post = $statement->fetch();
    return $post;
}

