<?php

class stepsController {
    private $pdo;
    private $model;
    public function __construct ()
    {
        $this->pdo = Database::connect();
        $this->model = new Steps($this->pdo);

    }
    public function getst() {
        $result = $this->model->getlistAction();
        //include "views/receipts/test.php";
        require_once('views/steps/display.php');
    }
}