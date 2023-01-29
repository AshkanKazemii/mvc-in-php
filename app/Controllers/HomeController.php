<?php

namespace App\Controllers ; 


class HomeController 
{
    public function index()
    {

        return __DIR__ . "/../Views/index.php" ;
    }

    public function showArticle()
    {
        $article =  [
            "name" => "mvc" ,
            "authors" => "ashkan kazemi"
        ];

        return __DIR__ . "/../Views/showArticle.php" ;
    }
}