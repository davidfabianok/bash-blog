<?php
require_once('includes/autenticator.php');
require_once('includes/conexion.php');
require_once('includes/helpers.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Categoria</title>
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,900|Source+Code+Pro:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php require_once('includes/header.php') ?>
    <div class="main container">
        <?php
        if (isset($_SESSION['user'])) {
            require_once('includes/user.php');
        } else {
            require_once('includes/sidebar.php');
        }
        ?>
        <main>
            <section id="category">
                <h1>Crear categoria</h1>
                <div>
                    <p>Agrega una categoria que creas que pueda ser ultil para los usuarios que publican</p>
                </div>
                <form class="category" action="addCategory.php" method="POST">
                    <div>
                        <label for="category">Nombre de la categoria :</label>
                        <span class="alert"><?=$_SESSION['error']['category']?></span>
                        <input type="text" name="category" id="category">
                    </div>
                    <div>
                        <input type="submit" name="submit" id="category">
                    </div>
                </form>
                <?php deleteAlert()  ?>
            </section>

        </main>
    </div>
    <?php require_once('includes/footer.php')  ?>

</body>

</html>