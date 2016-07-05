<?php

//require_once "./models/Sql.php";
require_once "./sql/myRecette.php";
require_once "./sql/myIngredient.php";
require_once "./sql/mySteps.php";
require_once "./sql/myComment.php";

class Read{
  public $tab;

  public function receiptAction($handle, $name) {
    $req = new Read();
    // get l'id de la recette et l'email plus tard le commentaire
    $recp = $req->getReceiptByName($handle, $name);
    // si une seul recette
    $st = TRUE;
    // si plusieur recette

    // recuperer les ingredients de cette recette
    $recp->ingredients = $req->getIgredients($handle, $recp->id);
    var_dump($recp->ingredients);
    // recuperer les etapes de cette recette
    $recp->steps = $req->getSteps($handle, $recp->id);
    var_dump($recp->steps);
    //recuperer les commentaires
/*
    $recp->comments = $req->getComments($handle, $recp->id);
    var_dump($recp->comments);
*/
    // return le tableau des ellement if TRUE 1 seule recette if FALSE plusieurs recettes

    return (array($st, $recp));

  }

  private function getReceiptByName($handle,$name) {
       $arres = array();
       //$pdo = new PDO('mysql:localhost','kitchen','root', 'root');
       $stmt = $handle->query("SELECT * from recettes;");
       foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
           $res = new myRecette($r['id'], $r['email'], $r['titre']);
           array_push($arres, $res);
       }
       return ($res);
  }

  private function getReceiptById($handle, $id) {
    //$pdo = new PDO('mysql:localhost','kitchen','root', 'root');
    $sql = "SELECT * from recettes WHERE id=" . $id . ";";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
      $res = new myRecette($r['id'], $r['mail'], $r['name']);
    }
    return $res;
  }

  private function getIgredients($handle, $rId) {
    $arres = array();
    $sql = "SELECT * FROM ingredients WHERE recette_id =" . $rId . " ORDER BY id;";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
      $res = new myIngredients($r['name'], $rId, $r['id'], $r['quantitee_id'], $r['value_ing']);
      array_push($arres, $res);
      //var_dump($res);
    }
    //var_dump($arres);
    return ($arres);
  }

  private function getSteps($handle, $rId){
    $arres = array();
    $sql = "SELECT * FROM etapes WHERE recette_id =" . $rId . " ORDER BY id;";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
      $res = new mySteps($rId, $r['id'], $r['etape_order'], $r['description']);
      array_push($arres, $res);
    }
    return ($arres);
  }


  //fonction commentaire

  private function getComments($handle, $rId) {
    $arres = array();
    $sql = "SELECT * FROM commentaires WHERE recette_id =" . $rId . " ORDER BY id;";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
      $res = new myComment($r['pseudo'], $rId, $r['id'], $r['note'], $r['commentaire']);
      array_push($arres, $res);
    }
    return ($arres);
  }

  //fonction photo
}
