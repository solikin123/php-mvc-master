<?php


namespace Solikin\PHP\MVC\Controller;


use Solikin\PHP\MVC\App\View;

class HomeController
{
    public function index(){

        $model = [
            "title " => "PHP MVC",
            "content" => "Selamat Belajar PHP MVC"
        ];
        View::render('Home/Index', $model);
    }

    public function hello(){
        echo "HomeController.hello()";
    }

    public function world(){
        echo "HomeController.world()";
    }

    public function author(){
        echo "Author : Solikin" . PHP_EOL;
    }
}