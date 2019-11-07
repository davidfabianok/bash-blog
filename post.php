<?php
require_once('includes/conexion.php');
require_once('includes/helpers.php');


if (isset($_GET['p'])) {
    $post = post($conexion, $_GET['p']);
    if (!$post) {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog ./bash - <?= $post['title'] ?></title>
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
            <section class="posts">
                <h1><?= $post['title'] ?></h1>
                <a href="category.php?c=<?= $post['category_id'] ?>">
                    <h3><?= $post['category'] ?></h3>
                </a>
                <h4><?= $post['nameuser'] ?? Admin ?> | <?= $post['date'] ?></h4>
                <div>
                    <p><?= $post['decription'] ?></p>
                </div>
            </section>
            <div class="mas">
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['id'] == $post['user_id']) : ?>
                    <a class="btn" href="editPost.php?p=<?=$post['id']?>">Editar post</a>
                    <a class="btn" href="deletePost.php?p=<?=$post['id']?>">Eliminar post</a>
                <?php endif ?>
            </div>
        </main>
    </div>
    <?php require_once('includes/footer.php') ?>
    <script src="app/script.js"></script>
</body>

</html>