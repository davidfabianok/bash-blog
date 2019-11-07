<?php
require_once('includes/conexion.php');
require_once('includes/helpers.php');
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar perfil</title>
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
        <!-- MAIN -->
        <main>
            <div id="register" class="active">
                <form action="updateProfile.php" method="POST">
                    <div>
                        <span class="alert"><?= $_SESSION['error']['update'] ?? '' ?></span>
                        <span class="success"><?= $_SESSION['success']['update'] ?? '' ?></span>
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" id="name" value="<?= $_SESSION['user']['name'] ?? '' ?>">
                        <span class="alert"><?= $_SESSION['error']['name'] ?? '' ?></span>
                    </div>
                    <div>
                        <label for="surname">Apellido:</label>
                        <input type="text" name="surname" id="surname" value="<?= $_SESSION['user']['surname'] ?? '' ?>">
                        <span class="alert"><?= $_SESSION['error']['surname'] ?? '' ?></span>
                    </div>
                    <div>
                        <label for="emailr">Email:</label>
                        <input type="email" name="email" id="emailr" value="<?= $_SESSION['user']['email'] ?? '' ?>">
                        <span class="alert"><?= $_SESSION['error']['email'] ?? '' ?></span>

                    </div>
                    <div class="submit">
                        <input type="submit" name="update" value="Guardar">
                    </div>
                    <?php deleteAlert() ?>
                </form>
            </div>
        </main>
    </div>
    <?php require_once('includes/footer.php') ?>
    <script src="app/script.js"></script>
</body>

</html>