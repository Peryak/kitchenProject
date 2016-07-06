<?php

/***
  *   objet myRecette pour le projet marmitton
  *   create by hugo couturier, 22/06/2016
  */

class myIngredients{

  public $name;
  public $rId;
  public $id;
  public $quantity;
  public $value_ing;

  public function __construct($name, $rId, $id, $quantity, $value_ing) {
    $this->name = $name;
    $this->rId = $rId;
    $this->id = $id;
    $this->quantity = $quantity;
    $this->value_ing= $value_ing;
  }

  public function addName($name) {
    $this->name = $name;
  }

  public function addId($id) {
    $this->id = $id;
  }

  public function addRId($rId) {
    $this->rId = $rId;
  }

  public function addQuantity($quantity) {
    $this->quantity = $quantity;
  }

  public function addValue($value_ing) {
    $this->value_ing = $value_ing;
  }

  public function fill($name, $id, $rId, $quantity, $value_ing) {
    $this->addName($name);
    $this->addId($id);
    $this->addRId($rId);
    $this->addQuantity($quantity);
    $this->addValue($value_ing);
    return ($this);
  }

  public function getName() {
    return ($this->name);
  }

  public function getId() {
    return ($this->id);
  }

  public function getRId() {
    return ($this->rId);
  }

  public function getQuantity() {
    return ($this->quantity);
  }

  public function getValue() {
    return ($this->value_ing);
  }

}
