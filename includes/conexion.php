<?php 
if(!isset($_SESSION)){
    session_start();
}

try {
    $conexion = new PDO('mysql:host=localhost;dbname=blog_bash;charset=utf8mb4','root','52752');
    // echo 'Connected database :)';
} catch (PDOException $e) {
    echo 'Error :( : '. $e->getMessage();
}