<?php
//oBJETIVO DE LA HERENCIA?
//Compartir propiedades
//Nota: Si dentro de una clase hija existe
//la ausencia del constructor, se ejecuta 
//el del padre

//Caso especial
//Necesitamos extender el constructor;
class Animal
{
    public $soun_type="Hago un sonido";
    public function run()
    {
        echo "Yo corro";
    }
    public function walk()
    {
        echo "Yo camino";
    }
    public function __construct()
    {
        echo "Ha nacido un animal";
    }
    public function getSound()
    {
        echo "yo " . $this->sound_type;
    }
}

// List<Cliente> cliente=new ArrayList<Cliente);
// cliente.add(new Cliente(1,), new Cliente(2));

//NOTA: La recomendacion es separarlo
class Dog extends Animal
{
    public  $sound_type="ladro";
    public function __construct()
    {
        parent::_construct();
        echo "Ha nacido un perro";
    }
}

class Cat extends Animal
{
    // public function run()
    // {
    //     echo "Yo corro";
    // }
    // public function walk()
    // {
    //     echo "Yo camino";
    // }
public  $sound_type="maullo";
    public function __construct()
    {
        parent::__construct();
        echo "Ha nacido un gato";
    }

}
$dog=new Dog();
$dog->run();
echo "\n";
$cat=new Cat();
$cat->run();
$cat->getSound();

//Verificar el tipo de dato devuelto
if($dog instanceof Dog)
{
    echo "Es un perro";
}
uf($dog instanceof Animal)
{
    echo "Es un animal";
}