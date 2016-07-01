<?php

class Database
{
    private static $dbName = 'kitchenproject' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'root';

    private static $cont  = null;

    /* This is the constructor of class Database.
    Since it is a static class, initialization of this class is not allowed.
    To prevent misuse of the class, we use a "die" function to remind users. */
    public function __construct() {
        die('Init function is not allowed');
    }

    /* This is the main function of this class.
    It uses singleton pattern to make sure only one PDO connection exist across the whole application.
    Since it is a static method. We use Database::connect() to create a connection.
    A singleton class allows us to return an instance of the connection
    and always the same as we only need one to execute all our queries */
    public static function connect()
    {
        // One connection through whole application
        if ( null == self::$cont )
        {
            try
            {
                //  It has an $instance variable that retains the connection object (PDO here)
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    /* Disconnect from database. It simply sets connection to NULL.
    We need to call this function to close connection. */
    public static function disconnect()
    {
        self::$cont = null;
    }
}
/*
class Db {

    private static $instance = NULL;

    //As the class is a singleton, we make __construct() and __clone() private so that no one can call new Db()
    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        //A singleton class allows us to return an instance of the connection
        // and always the same as we only need one to execute all our queries
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            // It has an $instance variable that retains the connection object (PDO here)
            self::$instance = new PDO('mysql:host=localhost;dbname=kitchenproject', 'root', 'root', $pdo_options);
        }
        return self::$instance;
    }
}*/