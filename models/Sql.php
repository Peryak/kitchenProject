<?php

class Sql{

  public function getReceiptByName($handle,$name){
       $arres = array();
       //$pdo = new PDO('mysql:localhost','kitchen','root', 'root');
       $stmt = $handle->query("SELECT * from recettes;");
       foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
           $res = new myRecette($r['id'], $r['email'], $r['titre']);
           array_push($arres, $res);
       }
       return ($arres);
  }

  public function getReceiptById($handle, $id){
    //$pdo = new PDO('mysql:localhost','kitchen','root', 'root');
    $sql = "SELECT * from recettes WHERE id=" . $id . ";";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
      $res = new myRecette($r['id'], $r['mail'], $r['name']);
    }
    return $res;
  }

  public function getIgredients($handle, $rId){
    $sql = "SELECT `name`, 'id', 'quantitee_id', 'value' FROM ingredient WHERE recette_id ='$rId' ORDER BY id";
    $stmt = $handle->query($sql);
    return ($stmt);
  }

  public function getSteps($handle, $rId){
    $sql = "SELECT 'id', `etape_order`, `commentaire` FROM etapes WHERE recette_id ='$rId'";
    $stmt = $handle->query($sql);
    return ($stmt);
  }

}
