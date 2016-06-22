<?php

/***
  *   objet myRecette pour le projet marmitton
  *   create by hugo couturier, 22/06/2016
  */

class myRecette{

  public $name;
  public $id;
  public $ingredients = array();
  public $steps = array();
  public $comments = array();

  public function __construct(){

  }

  public function addName($name){
    $this->name = $name;
  }

  public function addId($id){
    $this->id = $id;
  }

  public function addIngredient($ingredient){
    array_push($this->ingredients, $ingredient);
  }

  public function addStep($step){
    array_push($this->steps, $step);
  }

  public function addComment($comment){
    array_push($this->comments, $comment);
  }

}
