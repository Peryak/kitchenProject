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
       return ($res);
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
    $arres = array();
    $sql = "SELECT * FROM ingredients WHERE recette_id =" . $rId . " ORDER BY id";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r){
      $res = new myIngredients($r['name'], $rId, $r['id'], $r['quantitee_id'], $r['value_ing']);
      array_push($arres, $res);
      //var_dump($res);
    }
    //var_dump($arres);
    return ($arres);
  }

  public function getSteps($handle, $rId){
    $arres = array();
    $sql = "SELECT * FROM etapes WHERE recette_id =" . $rId . " ORDER BY id";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r){
      $res = new mySteps($rId, $r['id'], $r['etape_order'], $r['description']);
      array_push($arres, $res);
    }
    return ($arres);
  }

}
