<?php
require_once 'models/coche.php';
require_once 'models/multas.php';
require_once 'models/admin.php';



class MultaController
{
    private $modelmultas;
    

    public function __construct() {
        $this->modelmultas = new multas();
    }

    public function mostrarMultas()
    {
        $multas = $this->modelmultas->getMultas();
        require_once 'views/PrincipalView.php';
    }

    public function mostrarMultasAdmin()
    {
        $multas = $this->modelmultas->getMultasAdmin();
        require_once 'views/PrincipalAdminView.php';
    }

    public function editarMultaPagament()
    {

        $id = $_GET['id'];
        $editarMulta = new Multas();
        $id = $editarMulta->getMultaById($id);
        $editarMulta->updatePagament($id);

        echo "<meta http-equiv='refresh' content='5;url=index.php?controller=Multa&action=mostrarMultas'>";
        

    }

}