<?php

/***
  *   objet mySteps pour le projet marmitton
  *   create by hugo couturier, 23/06/2016
  */

class mySteps{
  public $id;
  public $rId;
  public $order;
  public $description;

  public function __construct($rId, $id, $order, $description){
    $this->id = $id;
    $this->rId = $rId;
    $this->order = $order;
    $this->description = $description;
  }

  public function addId($id){
    $this->id = $id;
  }

  public function addRId($rId){
    $this->rId = $rId;
  }

  public function addOrder($order){
    $this->order = $order;
  }

  public function addDescription($description){
    $this->description = $description;
  }

  public function fill($id, $rId, $order, $description){
    $this->id = $id;
    $this->rId = $rId;
    $this->order = $order;
    $this->description = $description;
    return ($this);    
  }
}
