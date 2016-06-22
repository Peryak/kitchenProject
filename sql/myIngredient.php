<?php

/***
  *   objet myRecette pour le projet marmitton
  *   create by hugo couturier, 22/06/2016
  */

class myIngredient{

  public $name;
  public $rId;
  public $id;
  public $quantity;
  public $value;

  public function __construct(){

  }

  public function addName($name){
    $this->name = $name;
  }

  public function addId($id){
    $this->id = $id;
  }

  public function addRId($rId){
    $this->rId = $rId;
  }

  public function addQuantity($quantity){
    $this->quantity = $quantity;
  }

  public function addValue($value){
    $this->value = $value;
  }

  public function fill($name, $id, $rId, $quantity, $value){
    $this->addName($name);
    $this->addId($id);
    $this->addRId($rId);
    $this->addQuantity($quantity);
    $this->addValue($value);
    return ($this);
  }

}
