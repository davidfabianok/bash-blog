<?php 

if (isset($_POST['login'])){
    require_once('includes/conexion.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        $_SESSION['error']['login'] = "Ingresa un email y una comtraseña";
        $_SESSION['success']['login'] = $email;
    } else {
        $_SESSION['success']['login'] = $email;

        $statement = $conexion->prepare('SELECT * FROM users WHERE :email = email LIMIT 1');
        $statement->execute( array(
            ':email' => $email
        ));
    
        $user = $statement->fetch();
    
        if($user){
    
            if(password_verify($password, $user['password'])){
                $_SESSION['user'] = $user;
        
            } else {
                $_SESSION['error']['login'] = 'El email o contraseña son incorrectos';
            }
    
        } else {
            $_SESSION['error']['login'] = 'No se encontro una cuenta vinculada a este email';
        }
    }

    header('location: index.php');
}