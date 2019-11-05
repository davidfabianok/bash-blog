<aside>
    <div class="user">
        <h3>Bienvenido, <?=$_SESSION['user']['name'] . ' ' . $_SESSION['user']['surname']?></h3>
        <p><?=$_SESSION['user']['email']?></p>
        <a class="btn" href="editProfile.php">Editar perfil</a>
        <a class="btn" href="createPost.php">Crear post</a>
        <a class="btn" href="createCategory.php">Crear categoria</a>
        <a class="btn" href="logout.php">Cerrar session</a>
    </div>
</aside>