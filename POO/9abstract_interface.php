<?php
//Clase abstracta tipo especial de clase que
// no puede ser instanciada pero que define estructura
// y puede definir funcionalidad
// Cada metodo que es definido como abstracto debera
// ser definido en la clase que se implementa.$_COOKIE

// Si existe un metodo abstracto dentro de una class_exists
// debera definirse como una clase abstracta.$_COOKIE


//Interfaz
//Define el comportamiento


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
    public function makeSound()
    {
        echo "Guau\n";
    }
}

class Cat extends Animal{

    public function makeSound()
    {
        echo "Miau\n";
    }
}

interface IDB
{
    public function connect();
}
class MySQL implements iDB{
    public function connect()
    {
        echo "conectando con MySQL\n";
    }
}
class Oracle implements IDB{
    //cambiar de base de datos resulta en un problema
    //que solo seria apuntar al driver a conectar
    public function connect()
    {
        echo "conectando con Oracle\n";
    }
}

$instDog=new Dog();
$instDog->makeSound();
$instDog->run();
$instCat=new Cat();
$instCat->makeSound();
$instCat->run();
$instMySQL=new MySQL();
$instMySQL->connect();
$instOracle=new Oracle();
$instOracle->connect();
?>
