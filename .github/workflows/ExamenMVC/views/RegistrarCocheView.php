<html>
    <body>
    <div>
        <form action="index.php?controller=Coche&action=crearCoche" method="post">
            <p>Matricula:</p><input type="text" id="matricula" name="matricula" required>
            <p>Password:</p><input type="password" id="" name="pass" required>
            <p>Propietario:</p><input type="text" id="prop" name="prop" required>
            <button type="submit" class="btn"><p>Registrar</p></button> 
        </form>
        <a href="index.php?controller=Login&action=loginForm">Tornar</a>
</div>
</body>
</html>