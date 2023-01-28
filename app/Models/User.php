<?php

namespace App\Models ;

use App\Models\Tables\UserTable;

class User
{
    public static $instance = null ;

    private function __construct(){}

    private static function getInstance()
    {
        if(static::$instance === null){
            static::$instance = new UserTable() ;
        }

        return static::$instance; 
    }

    public static function __callStatic($name, $arguments)
    {
        return static::getFacadeAccessore()->$name() ;   
    }

    private static function getFacadeAccessore()
    {
        return static::getInstance();
    }

}