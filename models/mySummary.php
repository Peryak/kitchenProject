<?php

/***
  *   objet mySummary pour le projet marmitton
  *   create by hugo couturier, 15/07/2016
  */

class mySummary{

  private $name;
  private $id;
  private $mail;
  private $ingredients

  public function __construct($id, $mail, $name) {
    $this->addId($id);
    $this->addMail($mail);
    $this->addName($name);
  }

  private function addId($id) {
    $this->id = $id;
  }

  private function addMail($mail) {
    $this->mail = $mail;
  }

  private function addName($name) {
    $this->name = $name;
  }

  public function addIngredients($ingredients) {
    $this->ingredients = $ingredients;
  }

  public function get() {
    $tab = array(
      'name' => $this->getName(),
      'mail' => $this->getMail(),
      'id'   => $this->getId(),
      'ingredients' => $this->getIngredients(),
    );
    return ($tab);
  }

  private function getId() {
    return ($this->id);
  }

  private function getMail() {
    return ($this->mail);
  }

  private function getName() {
    return ($this->name);
  }

  private function getIngredients() {
    return ($this->ingredients);
  }
}
