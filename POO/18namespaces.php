<?php


//segunda opción
require_once("MyClass.php");

//tercera opcion

//require_once("autoload_for_everything.php");

use MyNamespace\MyClass;
class Main
{
    public $posts;

    public function __construct()
    {
        //primera opción
        // $this->posts=new MyNamespace\MyClass;
        //terceraopcion

        $this->posts=new MyClass;
    }
}
$app=new Main();
$app->posts->greet();