<?php
trait myUtilities
{
    function sayMyName()
    {
        if(!$this->name)
        {
            Logger::log(
                "Error. Debe tener nombre"
            );
            throw new Exception("No tiene nombre");
        }
        echo "Mi nombre es " . $this->name . "\n";
    }
}

class Logger
{
    public static function log($text)
    {
        $prefix = date("d-m-Y- h:i:s ::: ");
        file_put_contents("log.txt",$prefix . $text . "\n", FILE_APPEND);
    }
}
abstract class Animal
{
    abstract public function makeSound();
    public function run()
    {
        echo "Corriendo\n";
    }
}

class Dog extends Animal
{
    use myUtilities;
    public $name="Kanito";
    public function makeSound()
    {

    }
}