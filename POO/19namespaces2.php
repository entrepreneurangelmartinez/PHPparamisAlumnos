<?php
//require_once("Posts.php");
//Si tengo dos archivos con el mismo nombre, como decirle
// a php cual debe de utilizar?
require_once("17autoload.php");
// require_once("..\at\bistro\Posts.php");
// use at\bistro\Posts;
// use at\bistro\Posts;
 use at\bistro\Posts;
class Main
{
    public $posts;

    public function __construct()
    {
        // $this->posts=new Posts;
         $this->posts=new Posts;
        //$this->posts=new Posts;
    }
}
$app=new Main();
$app->posts->greet();