<?php

require_once "./models/Sql.php";
require_once "./sql/myRecette.php";
require_once "./sql/myIngredient.php";
require_once "./sql/mySteps.php";

class Read{
  public $tab;

  public function receiptAction($handle, $name){
    $Sql = new Sql();
    // get l'id de la recette et l'email plus tard le commentaire
    $recp = $Sql->getReceiptByName($handle, $name);
    // si une seul recette
    $st = TRUE;
    // si plusieur recette

    // recuperer les ingredients de cette recette
    $recp['ingredients'] = $Sql->getIgredients($handle, $recp->id);
    // recuperer les etapes de cette recette
    $recp['steps'] = $Sql->getSteps($handle, $recp->id);
    // return le tableau des ellement if TRUE 1 seule recette if FALSE plusieurs recettes

    return (array($st, $recp));

  }

  public function ingredientAction($handle, $rId){
    // va chercher la recette sur la base

    // remplacer l'id de quantité par le nom

    // return l'ingredient
  }

  public function stepsAction($handle, $rId){
    // va chercher l'etapes

    // return l'etape
  }

  //fonction commentaire

  //fonction photo
}
