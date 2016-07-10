<?php

class Create
{

    public function receiptAction($_POST, $handle)
    {

        $recp;
        //ajouter l'ellement reccette
        $res = $this->putRecette($handle, $recp->mail, $ecp->name);
        //chercher l'id de la nouvelle recette
        $recp->addId($res['rId']);
        //pour chaque ingredient ajouter l'ingredient avec l'id de la recette
        foreach ($recp->ingredients as $r) {
            $this->putIngredients($recp->id, $r);
        }
        //pour chaque etape ajouter l'etape avec l'id de la recette
        foreach ($recp->Steps as $r) {
            $this->putSteps($recp->id, $r);
        }
        // verification

        //fin

    }

    private function putRecette($handle, $eMail, $name)
    {
        $sql = "INSERT INTO recettes (email, titre) VALUES ('$eMail','$name');";
        $handle->query($sql);
        $sql = "SELECT id FROM recettes WHERE titre = '$name'";
        $req = $handle->query($sql);
        while ($row = $req->fetch()) {
            $id = $row[0];
            //echo $id;
            //return ($id);
            $pass = TRUE;
            return (array('pass' => $pass, 'rId' => $rId));
        }
    }

    private function putIngredients($handle, $ingredients) {
      foreach ($ingredients as $key) {
        $pass = putIngredient($handle, $key);
        if ($pass == FALSE) {
          return (array('pass' => $pass, 'message' => "erreur lprs de l'ajout d'un ingredients"));
        }
      }

    }

    private function putIngredient($handle, $ingredient) {
      $sql = "INSERT INTO ingredeints (name, receipt_id, quantity_id, value_ing) VALUES ('$name', '$rId', '$quantity', '$value_ing')";
      $handle->query($sql);
      //testet la valeure de retour de la base
      $pass = TRUE
      //return la valeur de retour"
      return ($pass);
    }

    private function putSteps ($handle, $steps) {
      foreach ($steps as $key) {
        $pass = putStep($handle, $key);
        if ($pass == FALSE) {
          return (array('pass' => $pass, 'message' => "erreur lors de l'ajout d'une etape"));
        }
      }
    }

    private function putStep($handle, $step) {
      $sql = "";
      $handle->query($sql);
      //testet la valeure de retour de la base
      $pass = TRUE
      //return la valeur de retour"
      return ($pass);
    }

    public function putComment($handle, $comment) {
      $sql = 
    }

    public function stepsAction()
    {

        // Firstly we check if there is form submit by checking $_POST variable
        if (!empty($_POST)) {
            // keep track validation errors
            $etape_orderError = null;
            $recette_idError = null;
            $descriptionError = null;

            // keep track post values
            $etape_order = $_POST['etape_order'];
            $recette_id = $_POST['recette_id'];
            $description = $_POST['description'];

            // Additionally for email address entry, we use PHP filter to verify if it is a valid email address
            if (empty($recette_id)) {
                $recette_idError = 'Please enter the receipt number';
                $valid = false;
            } /*else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $emailError = 'Please enter a valid Email Address';
            $valid = false;
        }*/

            if (empty($description)) {
                $descriptionError = 'Please enter a description of the receipt';
                $valid = false;
            }


            //If it passes all validation rules, it inserts data to database using Database class
            // insert data
            if ($valid) {
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO etapes (etape_order,recette_id,description) values(?, ?, ?)";
                $q = $pdo->prepare($sql);
                $q->execute(array($etape_order, $recette_id, $description));
                Database::disconnect();
                header("Location: ../layout.php");

            }
            //return ($status);
        }
    }

    public function ingredientAction($array, $rId)
    {
        //check l'in de la quantité

        // ajouter l'ingredient avec l'id quantité
    }
}
