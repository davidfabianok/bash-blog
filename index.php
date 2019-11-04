<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog ./bash</title>
    <link href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,900|Source+Code+Pro:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="logo container">
            <a href="index.php">Blog ./bash</a>
        </div>
        <!-- NAV -->
        <nav>
            <ul class="container">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="">Categoria</a></li>
                <li><a href="">Categoria</a></li>
                <li><a href="">Categoria</a></li>
                <li><a href="">Sobre mi</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div class="main container">
        <!-- SIDEBAR -->
        <aside>
            <div id="login">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="password">Contraseña:</label>
                        <input type="pass" name="password" id="password">
                    </div>
                    <div>
                        <input type="submit" value="Ingresar">
                    </div>
                </form>
            </div>
            <div id="register">
                <h3>Registrate</h3>
                <form action="register.php" method="POST">
                    <div>
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div>
                        <label for="surname">Apellido:</label>
                        <input type="text" name="surname" id="surname">
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="password">Contraseña:</label>
                        <input type="pass" name="password" id="password">
                    </div>
                    <div>
                        <input type="submit" value="Registrarse">
                    </div>
                </form>
            </div>
        </aside>
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
    <!-- FOOTER -->
    <footer>
        <div>
            <p>Desarrollado por <b>David Fabian</b> &COPY; 2019</p>
        </div>
    </footer>
</body>

</html>