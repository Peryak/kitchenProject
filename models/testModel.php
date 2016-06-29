<?php

/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 29/06/2016
 * Time: 11:56
 */
class testModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function getlist(){
        $sql = 'SELECT * FROM etapes ORDER BY id DESC';
        $res = $this->pdo->query($sql);
        Database::disconnect();
        return $res;
    }
}