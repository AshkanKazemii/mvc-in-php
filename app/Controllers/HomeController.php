<?php

namespace App\Controllers ; 


class HomeController 
{
    public function index()
    {

        return include_once __DIR__ . "/../Views/index.php" ;
    }

    public function showArticle()
    {
        $article =  [
            "name" => "mvc" ,
            "authors" => "ashkan kazemi"
        ];

        return include_once __DIR__ . "/../Views/showArticle.php" ;
    }
}