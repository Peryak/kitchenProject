<?php

/***
  *   objet myRecette pour le projet marmitton
  *   create by hugo couturier, 22/06/2016
  */

class myRecette{

  private $name;
  private $id;
  private $mail;
  private $cookTime;
  private $prepTime;
  private $summary;
  private $ingredients = array();
  private $steps = array();
  private $comments = array();

  public function __construct($id, $mail, $name, $cookTime, $prepTime, $summary) {
    $this->addName($name);
    $this->addId($id);
    $this->addMail($mail);
    $this->addCT($cookTime);
    $this->addPT($prepTime);
    $this->addSummary($summary);
  }

  public function addName($name) {
    $this->name = $name;
  }

  public function addMail($mail) {
    $this->mail = $mail;
  }

  public function addId($id) {
    $this->id = $id;
  }

  public function addCT($cookTime) {
    $this->cookTime = $cookTime;
  }

  public function addPT($prepTime) {
    $this->prepTime = $prepTime;
  }

  public function addIngredients($ingredient) {
    $this->ingredients = $ingredient;
  }

  public function addSteps($step) {
    $this->steps = $step;
  }

  public function addComments($comment) {
    $this->comments = $comment;
  }

  private function addSummary($summary) {
    $this->summary = $summary;
  }

  public function fill($name, $id, $ingredients, $steps, $comments) {
    $this->addName($name);
    $this->addId($id);
    $this->addIngredients($ingredients);
    $this->addSteps($steps);
    $this->addComments($comments);
    return ($this);
  }

  public function getName() {
    return ($this->name);
  }

  public function getMail() {
    return ($this->mail);
  }

  public function getId() {
    return ($this->id);
  }

  public function getCT() {
    return ($this->cookTime);
  }

  public function getPT() {
    return ($this->prepTime);
  }

  public function getIngredients() {
    return ($this->ingredients);
  }

  public function getSteps() {
    return ($this->steps);
  }

  public function getComments() {
    return ($this->comments);
  }

  private function getSummary() {
    return ($this->summary);
  }

  public function get() {
    $tab = array(
      'name' => $this->getName(),
      'mail' => $this->getMail(),
      'id'  => $this->getId(),
      'cookTime' => $this->getCT(),
      'prepTime' => $this->getPT(),
      'ingredients' => $this->getIngredients(),
      'steps' => $this->getSteps(),
      'comments' => $this->getComments(),
      'summary' => $this->getSummary(),
    );
    return $tab;
  }
}
