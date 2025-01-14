<?php

require_once("database.php");

class Multas extends Database
{
    public function getMultas()
    {
        $sql = "SELECT * FROM multa m INNER JOIN coche c ON m.matricula = c.matricula";

        $db = $this->conectar();
        $stmt = $db->query($sql);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function getMultasAdmin()
    {
        $sql = "SELECT m.fecha, m.tipo_multa, m.matricula, c.propietario FROM multa m INNER JOIN coche c ON m.matricula = c.matricula";

        $db = $this->conectar();
        $stmt = $db->query($sql);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }




    public function updatePagament($id)
    {
        $sql = "UPDATE multa SET pagada = 0 WHERE id_multa = :id";
        $db = $this->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->execute();
    }

    public function getMultaById($id)
    {
        $sql = "SELECT * FROM multa WHERE id_multa = :id";
        $db = $this->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}