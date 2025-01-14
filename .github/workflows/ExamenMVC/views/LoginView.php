<html>
    <body>
    <div >
        <h1>Consulta les teves multes</h1>
        <form action="index.php?controller=Login&action=login" method="post">
            <p>Matricula:</p><input type="text" id="matricula" name="matricula" required>
            <p>Password:</p><input type="password" id="pass" name="pass" required>
            <button type="submit" class="btn">Entrar</button> 
        </form>

        <a href="index.php?controller=Coche&action=crearCoche">Registra't per consultar les teves multes</a>
        <a href="index.php?controller=Login&action=loginAdminForm">Sóc administrador</a>
   
    </div>
    </body>
</html>