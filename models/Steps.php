<?php

class Steps
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function getlistAction() {
        $sql = 'SELECT * FROM etapes ORDER BY id DESC';
        $res = $this->pdo->query($sql);
        Database::disconnect();
        return $res;
    }
}
