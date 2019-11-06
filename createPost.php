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
    <title>Crear Post</title>
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
            <section id="post">
                <h1>Crear Post</h1>
                <div>
                    <p>Agrega una post a la comunidad</p>
                </div>
                <form class="category" action="addPost.php" method="POST">
                    <div>
                        <label for="title">Titulo: </label>
                        <span class="alert"><?= $_SESSION['error']['title'] ?? '' ?></span>
                        <input type="text" name="title" id="title">
                    </div>
                    <div>
                        <label for="description">Descripcion: </label>
                        <span class="alert"><?= $_SESSION['error']['description'] ?? '' ?></span>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <div>
                        <label for="category">Categoria: </label>
                        <span class="alert"><?= $_SESSION['error']['category'] ?? '' ?></span>
                        <select name="category" id="category">
                            <?php $categories = categories($conexion);
                            foreach ($categories as $category) : ?>
                                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div>
                        <input type="submit" name="submit">
                    </div>
                </form>
                <?php deleteAlert()  ?>
            </section>

        </main>
    </div>
    <?php require_once('includes/footer.php')  ?>

</body>

</html>