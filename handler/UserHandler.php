<?php

require_once dirname(__FILE__).'/../models/User.php';

class UserHandler
{
    public static function create($u){
        $pdo = new PDO('mysql:dbname=kitchen;host=localhost','root', 'root');
        $query = 'INSERT INTO user (name, adresse, age) VALUES (?,?,?);';
        $stmt = $pdo->prepare($query);
        return $stmt->execute($u->toArray());
    }

    public static function read($id){
        $pdo = new PDO('mysql:localhost','kitchen','root', 'root');
        $stmt = $pdo->query('SELECT * from user WHERE id='.$id);
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
            $u = new User($r['id'], $r['name'], $r['age'], $r['adresse']);
        }
        return $u;
    }

    public static function readAll(){
        $arres = array();
        $pdo = new PDO('mysql:localhost','kitchen','root', 'root');
        $stmt = $pdo->query('SELECT * from user');
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
            $u = new User($r['id'], $r['name'], $r['age'], $r['adresse']);
            array_push($arres, $u);
        }
        return ($arres);
    }

    public static function update($u){
        
    }

    public static function delete($id){
        
    }
}