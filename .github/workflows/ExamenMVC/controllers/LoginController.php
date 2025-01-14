<?php

require_once 'models/coche.php';
require_once 'models/admin.php';

class LoginController
{
    public function loginForm()
    {
       require_once 'views/LoginView.php'; // Si no hay POST, mostrar el formulario de login
    
    }
    public function login(){
        $coche = new Coche();
        $matricula = $_POST['matricula'];
        $pass = $_POST['pass'];
        
        $cocheData = $coche->verifyCoche($matricula, $pass);
        if ($cocheData){
            $_SESSION['matricula'] = $cocheData['matricula'];
            echo "<meta http-equiv='refresh' content='0;url=index.php?controller=Multa&action=mostrarMultas'>";
        } else {
            // Si las credenciales son incorrectas, mostrar un error
            $error = "Matricula o contrasenya incorrectes.";
            require_once 'views/LoginView.php'; 
        }
        
    }

    public function loginAdminForm()
    {
       require_once 'views/LoginAdminView.php'; // Si no hay POST, mostrar el formulario de login
    
    }
    public function loginAdmin(){
        $admin = new Admin();
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        $adminData = $admin->verifyAdmin($user, $pass);
        if ($adminData){
            $_SESSION['user'] = $adminData['user'];
            echo "<meta http-equiv='refresh' content='0;url=index.php?controller=Multa&action=mostrarMultasAdmin'>";
        } else {
            // Si las credenciales son incorrectas, mostrar un error
            $error = "Usuari o contrasenya incorrectes.";
            require_once 'views/LoginAdminView.php'; 
        }
        
    }
}