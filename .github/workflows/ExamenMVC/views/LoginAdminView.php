<html>
    <body>
    <div >
        <form action="index.php?controller=Login&action=loginAdmin" method="post">
            <p>Nom Administrador:</p><input type="text" id="user" name="user" required>
            <p>Password:</p><input type="password" id="pass" name="pass" required>
            <button type="submit" class="btn">Entrar</button> 
        </form>
        <a href="index.php?controller=Login&action=loginForm">Tornar</a>
    </div>
    </body>
</html>