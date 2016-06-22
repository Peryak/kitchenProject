<?php

/***
  *  fichier de commande pour recuperer les données dans la base
  *  hugo couturier le 18/06/2016.
  */

  class myDB{

    public $conn;
    public $dbName;

    public function __construct($uId, $upwd, $name){
      try{
        $conn = new PDO('mysql:host=localhost;dbname=', $userId, $pass);
      }
      catch(Exception $e){
          die('Erreur : '.$e->getMessage());
      }
      $this->dbName = $name;
      $this->conn = $conn;
    }

    public function getRecette(){
      
    }

  }
