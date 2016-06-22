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
    $recette = new myRecette();


    return($recette);
  }

  public function getIgredient($rId){

  }

  public function getStep($rId){

  }

  public function getComment($rId){

  }
  /***
    *   ajout une recette a la base de donner et return l'id de cette recette.
    */
  public function putRecette($name, $eMail){
    $sql = "INSERT INTO recettes (email, titre) VALUES ('$eMail','$name');";
    $this->conn->query($sql);
    //$sql = "SELECT id FROM recettes WHERE titre = '$name'";
    $id = $conn->PDO::lastInsertId('');
    return ($id);
  }
}
