<?php
//Reflection es para el análisis de clases
trait myUtilites
{
    function sayMyName()
    {
        echo "Mi nombre es " . $this->name . "\n";
    }
}
abstract class Animal
{
    const NATIONALITY="Universal";
    public static $year_born=2016;
    abstract public function makeSound();

    public function run()
    {
        echo "Corriendo\n";
    }
    public static function panic()
    {

    }
}
class Dog extends Animal
{
    use myUtilites;
    public $name="Kanito";
    public function makeSound()
    {
        echo "Guau\n";
    }

}

//Crear una nueva clase de la reflection Class

$reflect_class = new ReflectionClass("Dog");
//Probar tambien ocn la clase Animal
Reflection::export($reflect_class);
echo $reflect_class->getName();

var_dump($reflect_class->isAbstract());
var_dump($reflect_class->isInstantiable());
var_dump($reflect_class->isInternal());