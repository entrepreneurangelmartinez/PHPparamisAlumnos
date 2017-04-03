<?php
class Post{
    private $name;
    public function __set($name,$value){
        echo "Setting" . $name . "to <strong>". "</strong><br>";
        $this->name=$value;
    }
    public function __get($name){
        return $this->name;
    }
    public function __isset($name){
        echo "Is " . $name. " set?\n";
        // return isset($this>name);
    }
}
$post=new Post;
$post->name="testing";
echo $post->name . "get";