<?php

/***
  *   objet myRecette pour le projet marmitton
  *   create by hugo couturier, 22/06/2016
  */

class myRecette{

  public $name;
  public $id;
  public $mail;
  public $ingredients = array();
  public $steps = array();
  public $comments = array();

  public function __construct($id, $mail, $title){
    $this->addName($title);
    $this->addId($id);
    $this->addMail($mail);


  }

  public function addName($name){
    $this->name = $name;
  }

  public function addMail($mail){
    $this->mail = $mail;
  }

  public function addId($id){
    $this->id = $id;
  }

  public function addIngredients($ingredient){
    array_push($this->ingredients, $ingredient);
  }

  public function addSteps($step){
    array_push($this->steps, $step);
  }

  public function addComments($comment){
    array_push($this->comments, $comment);
  }

  public function fill($name, $id, $ingredients, $steps, $comments){
    $this->addName($name);
    $this->addId($id);
    $this->addIngredients($ingredients);
    $this->addSteps($steps);
    $this->addComments($comments);
    return ($this);
  }

}
