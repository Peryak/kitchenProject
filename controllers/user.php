<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 22/06/2016
 * Time: 11:40
 */

$arrayUser = UserHandler::readAll();

foreach ($arrayUser as $u) {
    echo "<tabalise>".$u->getName()."</tabalise>";  
}
