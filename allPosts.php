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
    <title>Todos los Posts</title>
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
                <h1>Todos posts</h1>
               
               <?php 
               $posts=posts($conexion);
               foreach ($posts as $post) : ?>
                 <article class="post">
                    <a href="post.php?p=<?=$post['id']?>">
                        <h2><?=$post['title']?></h2>
                        <span class="info"><?='Categoria: ' . $post['category'] . '  |  ' . $post['date']?></span>
                        <p><?=substr($post['decription'], 0, 300) . '...'?></p>
                    </a>
                </article>

               <?php endforeach ?>

            </section>
        </main>
    </div>
    <?php require_once('includes/footer.php') ?>
    <script src="app/script.js"></script>
</body>

</html>