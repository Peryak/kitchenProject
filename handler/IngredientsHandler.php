<?php

require_once dirname(__FILE__).'/../models/Ingredients.php';

class IngredientsHandler
{
    public static function create($u){
        $pdo = new PDO('mysql:dbname=kitchenTest;host=localhost','root','');
        $query = 'INSERT INTO ingredients (`name`, `quantity`, `value`) VALUES (?,?,?);';
        $stmt = $pdo->prepare($query);
        return $stmt->execute($u->toArray());
    }

    public static function read($id){
        $arres = array();
        $pdo = new PDO('mysql:dbname=kitchenTest;host=localhost','root','');
        $stmt = $pdo->query('SELECT * FROM ingredients WHERE id='.$id);
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r){
            $u = new Ingredients($r['id'], $r['name'], $r['quantity'], $r['value']);
            array_push($arres, $u);
        }
        return $arres;
    }

    public static function readAll(){
        $arres = array();
        $pdo = new PDO('mysql:dbname=kitchenTest;host=localhost','root','');
        $stmt = $pdo->query('SELECT * FROM ingredients');
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r){
            $u = new Ingredients($r['id'], $r['name'], $r['quantity'], $r['value']);
            array_push($arres, $u);
        }
        return $arres;
    }

    public static function update($u){

    }

    public static function delete($u){
        $pdo = new PDO('mysql:dbname=kitchenTest;host=localhost','root','');
        $query = 'DROP TABLE ingredients';
        $stmt = $pdo->prepare($query);
        return $stmt->execute($u->toArray());
    }
}
AA289XH
