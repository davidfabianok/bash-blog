<?php  

require_once('includes/conexion.php');

if(isset($_SESSION['user']) && isset($_GET['p'])){
    $id = $_GET['p'];
    $user_id = $_SESSION['user']['id'];

    $statement = $conexion->prepare('DELETE FROM posts WHERE user_id = :user_id AND id = :id');
    $statement->execute(array(
        ':user_id' => $user_id,
        ':id' => $id
    ));

}

header('Location: index.php');