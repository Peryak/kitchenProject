<?php

class Ingredients
{
    private $id;
    private $name;
    private $quantity;
    private $value;

    public function __construct($id, $name, $quantity, $value){
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->value = $value;
    }

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }

    public function getValue(){
        return $this->value;
    }
    
    public function setValue($value){
        $this->value = $value;
    }

    public function toArray(){
        return array($this->name, $this->quantity, $this->value);
    }
    
    public function toString(){
        return '[id] => '.$this->id.' [name] => '.$this->name.' [quantity] => '.$this->quantity.' [value] => '.$this->value;
    }
}