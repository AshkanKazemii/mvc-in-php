<?php

use App\Controllers\HomeController;

include_once __DIR__ . "/vendor/autoload.php" ;


$routes = [
    "/" => [ HomeController::class , "index" , "GET"] ,
    "/show-article" => [ HomeController::class , "showArticle" , "GET"]
] ;

foreach($routes as $key => $route)
{
    if("/mvc{$key}" == $_SERVER['REQUEST_URI']){

        if($_SERVER["REQUEST_METHOD"] == ($route[2]))
        {
            $controller = new $route[0] ;
            // var_dump($controller);die;
            $controller->{$route[1]}() ;
        } else {
            // redirect to 404 OR return error
        }
    }
}