<?php

require_once("database.php");

class Coche extends Database
{
    public function verifyCoche($matricula, $pass)
    {
        $sql = "SELECT * FROM coche WHERE matricula = :matricula AND pass = :pass";
        $db = $this->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':matricula', $matricula);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createCoche($matricula, $pass, $propietario)
    {
        $db = $this->conectar();

        $comprCoche = "SELECT * FROM coche WHERE matricula = :matricula";
        $stmt = $db->prepare($comprCoche);
        $stmt->bindParam(':matricula', $matricula);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            echo "Aquesta matricula ya es troba regitrada.";
        }

        $sql = "INSERT INTO coche (matricula, pass, propietario) VALUES (:matricula, :pass, :propietario)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':matricula', $matricula);
        $stmt->bindParam(':pass', $pass); 
        $stmt->bindParam(':propietario', $propietario);
        

        return $stmt->execute();
    }
}