<!-- HEADER -->
<header>
    <div class="logo container">
        <a href="index.php">Blog ./bash</a>
    </div>
    <!-- NAV -->
    <nav>
        <ul class="container">
            <li><a href="index.php">Inicio</a></li>
            <?php 
               $categories =  categories($conexion);
               foreach($categories as $category) : ?>
               <li><a href="index.php?c=<?=$category['id']?>"><?=$category['name']?></a></li>
               <?php endforeach ?>
            <li><a href="">Sobre mi</a></li>
            <li><a href="">Contacto</a></li>
        </ul>
    </nav>
</header>