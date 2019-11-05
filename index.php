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
    <title>Blog ./bash</title>
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
                <h1>Ultimos posts</h1>
                <article class="post">
                    <a href="">
                        <h2>TITULO POST</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ratione voluptates corrupti totam, ea ullam mollitia laboriosam officia vero distinctio exercitationem molestiae sed, at minima omnis voluptatum eos! Dolore, quas. Corrupti nulla necessitatibus odio tempore fuga dolorum. Voluptates sequi itaque earum! Corrupti eum fugit nam maxime qui ducimus officia quisquam!</p>
                    </a>
                </article>
                <article class="post">
                    <a href="">
                        <h2>TITULO POST</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ratione voluptates corrupti totam, ea ullam mollitia laboriosam officia vero distinctio exercitationem molestiae sed, at minima omnis voluptatum eos! Dolore, quas. Corrupti nulla necessitatibus odio tempore fuga dolorum. Voluptates sequi itaque earum! Corrupti eum fugit nam maxime qui ducimus officia quisquam!</p>
                    </a>
                </article>
                <article class="post">
                    <a href="">
                        <h2>TITULO POST</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ratione voluptates corrupti totam, ea ullam mollitia laboriosam officia vero distinctio exercitationem molestiae sed, at minima omnis voluptatum eos! Dolore, quas. Corrupti nulla necessitatibus odio tempore fuga dolorum. Voluptates sequi itaque earum! Corrupti eum fugit nam maxime qui ducimus officia quisquam!</p>
                    </a>
                </article>
                <article class="post">
                    <a href="">
                        <h2>TITULO POST</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ratione voluptates corrupti totam, ea ullam mollitia laboriosam officia vero distinctio exercitationem molestiae sed, at minima omnis voluptatum eos! Dolore, quas. Corrupti nulla necessitatibus odio tempore fuga dolorum. Voluptates sequi itaque earum! Corrupti eum fugit nam maxime qui ducimus officia quisquam!</p>
                    </a>
                </article>
                <article class="post">
                    <a href="">
                        <h2>TITULO POST</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ratione voluptates corrupti totam, ea ullam mollitia laboriosam officia vero distinctio exercitationem molestiae sed, at minima omnis voluptatum eos! Dolore, quas. Corrupti nulla necessitatibus odio tempore fuga dolorum. Voluptates sequi itaque earum! Corrupti eum fugit nam maxime qui ducimus officia quisquam!</p>
                    </a>
                </article>
                <div class="mas">
                    <a href="">Ver todos los post</a>
                </div>

            </section>
        </main>
    </div>
    <?php require_once('includes/footer.php') ?>
    <script src="app/script.js"></script>
</body>

</html>