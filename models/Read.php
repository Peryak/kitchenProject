<?php

//require_once "./models/Sql.php";
require_once "./sql/myRecette.php";
require_once "./sql/myIngredient.php";
require_once "./sql/mySteps.php";
require_once "./sql/myComment.php";

class Read{
  public $tab;

  public function receiptAction($handle, $name) {
    //$req = new Read();
    // get l'id de la recette et l'email plus tard le commentaire
    $recp = $this->getReceiptByName($handle, $name);
    // si une seul recette
    $st = TRUE;
    // si plusieur recette

    // recuperer les ingredients de cette recette
    $recp->addIngredients($this->getIgredients($handle, $recp->getId()));
    //var_dump($recp->ingredients);
    $this->getQuantity($handle, $recp);
    //var_dump($recp->ingredients);
    // recuperer les etapes de cette recette
    $recp->addSteps($this->getSteps($handle, $recp->getId()));
    //var_dump($recp->steps);
    //recuperer les commentaires
/*
    $recp->comments = $this->getComments($handle, $recp->id);
    var_dump($recp->comments);
*/
    // return le tableau des éléments if TRUE 1 seule recette if FALSE plusieurs recettes
    if ($st == FALSE)
      return ($st);
    else
      return ($recp);

  }

  private function getReceiptByName($handle, $name) {
       //$arres = array();
       //$pdo = new PDO('mysql:localhost','kitchen','root', 'root');
       $stmt = $handle->query("SELECT * from receipts WHERE name LIKE '" . $name . "'");
       foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
           $res = new myRecette($r['id'], $r['email'], $r['name'], $r['cook_time'], $r['prep_time'], $r['summary']);
           //array_push($arres, $res);
       }
       return ($res);
  }

  public function getReceiptById($handle, $id) {
    //$pdo = new PDO('mysql:localhost','kitchen','root', 'root');
    $sql = "SELECT * from receipts WHERE id=" . $id . ";";
    $stmt = $handle->query($sql);
    //var_dump($stmt);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
      $res = new myRecette($r['id'], $r['email'], $r['title'], $r['cook_time'], $r['prep_time']);
    }
    return $res;
  }

  private function getIgredients($handle, $rId) {
    $arres = array();
    $sql = "SELECT * FROM ingredients WHERE receipt_id =" . $rId . " ORDER BY id;";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
      $res = new myIngredients($r['name'], $rId, $r['id'], $r['quantity_id'], $r['value_ing']);
      array_push($arres, $res);
      //var_dump($res);
    }
    //var_dump($arres);
    return ($arres);
  }

  private function getSteps($handle, $rId) {
    $arres = array();
    $sql = "SELECT * FROM steps WHERE receipt_id =" . $rId . " ORDER BY id;";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
      $res = new mySteps($rId, $r['id'], $r['step_order'], $r['description']);
      array_push($arres, $res);
    }
    return ($arres);
  }

  private function getQuantity($handle, $recp) {
    $tardTable = array();
    $sql = "SELECT * FROM quantities ORDER BY Id";
    $stmt = $handle->query($sql);
    foreach ($stmt->fetchALL(PDO::FETCH_ASSOC) as $key) {
      $tradTable[$key['id']] = $key['name'];
    }
    foreach ($recp->getIngredients() as $r) {
      $r->addQuantity($tradTable[$r->getQuantity()]);
      //var_dump($r);
    }
  }

  //fonction commentaire

  private function getComments($handle, $rId) {
    $arres = array();
    $sql = "SELECT * FROM comments WHERE receipt_id =" . $rId . " ORDER BY id;";
    $stmt = $handle->query($sql);
    var_dump($stmt);
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
      $res = new myComment($r['pseudo'], $rId, $r['id'], $r['mark'], $r['comment']);
      array_push($arres, $res);
    }
    var_dump($arres);
    return ($arres);
  }

  //fonction photo

  public function getAllReceipt($handle, $bool, $array)
  {
    if ($bool == TRUE) {
      // lire tout le tableau
      $arr = array();
      $sqls = "SELECT * FROM receipts ORDER BY id;";
      $stmts = $handle->query($sqls);
      foreach ($stmts->fetchAll(PDO::FETCH_ASSOC) as $vars) {
        $ress = new myRecette($vars['id'], $vars['email'], $vars['title'], $vars['cook_time'], $vars['prep_time'], $vars['summary']);
        array_push($arr, $ress);
      }
      return ($arr);
    }
    else {
      // lire array[0] = au nombre d'éléments à afficher à partir de la fin
      $arres = array();
      $sql = "SELECT * FROM receipts ORDER BY id DESC LIMIT " . $array[0] . ";";
      $stmt = $handle->query($sql);
      foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $var) {
        $res = new myRecette($var);
        array_push($arres, $res);
      }
      return ($arres);
    }
  }
}
