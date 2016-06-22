<?php

class User
{
    private $id;
    private $name;
    private $age;
    private $adresse;

    public function __construct($id, $name, $age, $adresse)
    {
        $this->id = $id;
        $this->name = $name;
        $this->adresse = $adresse;
        $this->age = $age;
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function toArray()
    {
        return array($this->name, $this->adresse, $this->age);
    }
}