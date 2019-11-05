<!-- SIDEBAR -->
<aside>
    <div class="menu-aside">
        <button id="btnLogin" class="login">Iniciar sesion</button>
        <button id="btnRegister" class="register">Registrarse</button>
    </div>
    <div id="login" class="active">
        <form action="login.php" method="POST">
            <div>
            <span class="alert"><?=$_SESSION['error']['login'] ?? ''?></span>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?=$_SESSION['success']['login'] ?? ''?>">
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="submit">
                <input type="submit" name="login" value="Ingresar">
            </div>
        </form>
    </div>
    <div id="register">
        <form action="register.php" method="POST">
            <div>
                <span class="alert"><?=$_SESSION['error']['register'] ?? ''?></span>
                <span class="success"><?=$_SESSION['success']['register'] ?? ''?></span>
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" value="<?=$_SESSION['success']['name'] ?? ''?>">
                <span class="alert"><?=$_SESSION['error']['name'] ?? ''?></span>
            </div>
            <div>
                <label for="surname">Apellido:</label>
                <input type="text" name="surname" id="surname" value="<?=$_SESSION['success']['surname'] ?? ''?>">
                <span class="alert"><?=$_SESSION['error']['surname'] ?? ''?></span>
            </div>
            <div>
                <label for="emailr">Email:</label>
                <input type="email" name="email" id="emailr" value="<?=$_SESSION['success']['email'] ?? ''?>">
                <span class="alert"><?=$_SESSION['error']['email'] ?? ''?></span>

            </div>
            <div>
                <label for="passwordr">Contraseña:</label>
                <input type="password" name="password" id="passwordr">
                <span class="alert"><?=$_SESSION['error']['password'] ?? ''?></span>
            </div>
            <div class="submit">
                <input type="submit" name="register" value="Registrarse">
            </div>
            <?php deleteAlert()?>
        </form>
    </div>
</aside>