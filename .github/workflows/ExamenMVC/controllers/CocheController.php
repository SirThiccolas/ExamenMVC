<?php

require_once 'models/coche.php';

class CocheController
{
    public function crearCoche()
    {
        if ($_POST) {
            $matricula = $_POST['matricula'];
            $pass = $_POST['pass'];
            $propietario = $_POST['prop'];

            $crearCoche = new Coche();
            $confCoche = $crearCoche->createCoche($matricula, $pass, $propietario);

            if($confCoche){
                require_once 'views/LoginView.php';
            }
        }else{
            require_once 'views/RegistrarCocheView.php';
        }

       
    }
}