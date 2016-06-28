<?php

/***
  *  fichier de commande pour recuperer les données dans la base
  *  hugo couturier le 18/06/2016.
  */

require "myRecette.php";

class myDB{

  public $conn;
  public $dbName;

  public function __construct($uId, $uPwd, $name){
    try{
      $conn = new PDO('mysql:host=localhost;dbname=kitchenproject', $uId, $uPwd);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    $this->dbName = $name;
    $this->conn = $conn;
  }

  public function getRecette($name){
    $sql = "SELECT `name`, `email`, `id` FROM recette WHERE name ='$name'";
    $req = $this->conn->query($sql);
    foreach($req->fetch);
    $recette = new myRecette();
    return($recette);
  }

  public function getIgredients($rId){
    $ingredients = array();
    $sql = "SELECT `name`, 'id', 'quantitee_id', 'value' FROM ingredient WHERE recette_id ='$rId' ORDER BY id";
    $req = $this->conn->query($sql);
    foreach($req->fetch){
      $ing = new myIngredients(req[0], $rId, req[1], req[2], req[3]);
      array_push($ingredients, $ing);
    }
    return($ingredients);
  }

  public function getSteps($rId){
    $sql = "SELECT 'id', `etape_order`, `commentaire` FROM etapes WHERE recette_id ='$rId'";
    $req = $this->conn->query($sql);
    foreach($req->fetch){
      $ste = new mySteps($rId, req[0], req[1], req[2]);
      array_push($steps, $ste);
    }
    return($steps);
  }

  public function getComments($rId){
    $sql = "SELECT `name`, `email`, `id` FROM recette WHERE recette_id ='$rId'";
    $req = $this->conn->query($sql);
    foreach($req->fetch);
    $recette = new myRecette();
    return($recette);
  }
  /***
    *   ajout une recette a la base de donner et return l'id de cette recette.
    */
  public function putRecette($name, $eMail){
    $sql = "INSERT INTO recettes (email, titre) VALUES ('$eMail','$name');";
    $this->conn->query($sql);
    $sql = "SELECT id FROM recettes WHERE titre = '$name'";
    $req = $this->conn->query($sql);
    while ($row = $req->fetch()){
      $id = $row[0];
    }
    //echo $id;
    return ($id);
  }

}
