<?php

class Recipe extends Controller
{
    public function addRecipeAction()
    {
        echo 'Hey';
        /*$this->model('Recipe');*/

        /*$recette = $_POST['recette'];
        $add = addRecetteToDb($recette);
        if ($add) {
            return $this->view('home/recette', ['username' => $user->name]);
        } else {
            return $this->view('home/error', ['error' => 'Internal Server Error']);
        }*/

        $this->view('home/index');
        echo $this->view;
    }

    public function removeRecette()
    {

    }
}