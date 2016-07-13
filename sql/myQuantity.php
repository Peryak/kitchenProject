<?php

/***
  *   objet myQuantity pour le projet marmitton
  *   create by hugo couturier, 23/06/2016
  */

class myQUantity{
  private $id;
  private $value;

  public function __construct($id, $value) {
    $this->id = $id;
    $this->value = $value;
  }

  public function addId($id) {
    $this->id = $id;
  }

  public function addValue($value) {
    $this->value = $value;
  }

  public function fill($id, $value) {
    $this->addId($id);
    $this->addValue($value);
    return ($this);
  }

  public function getId() {
    return ($this->id);
  }

  public function getValue($value) {
    return ($this->value);
  }

  public function get() {
    $tab = array(
      'id' => $this->getId(),
      'value' => $this->getValue(),
    );
    return $tab;
  }
}
