<?php

require_once("database.php");

class Admin extends Database
{
    public function verifyAdmin($user, $pass)
    {
        $sql = "SELECT * FROM administrador WHERE user = :user AND pass = :pass";
        $db = $this->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}