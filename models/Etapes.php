<?php

class Etapes {
    
    public function Etapes() {
        //If it passes all validation rules, it inserts data to database using Database class
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO etapes (etape_order,recette_id,description) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($etape_order,$recette_id,$description));
            Database::disconnect();
            header("Location: ../index.php");
        }
    }
}