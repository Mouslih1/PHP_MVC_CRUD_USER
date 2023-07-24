<?php


class Database
{
    private static $instance;

    public static function getPDO()
    {
        if(self::$instance === null)
        {
            self::$instance = new PDO("mysql:host=localhost;dbname=usercrud;charset=utf8", "root", "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);        
        }

        return self::$instance;
    }
    
}