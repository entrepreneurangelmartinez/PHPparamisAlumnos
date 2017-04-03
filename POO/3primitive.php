<?php
//Permite ahora el tipo de datos dependiendo
//la version

//php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration
class Pet
{
    public $name="Firulais";
}

class Person
{
    public $age;
    public $name;
    private $money_in_wallet;
    private $todos;
    private $married;

    public function run()
    {
        echo "Estoy corriendo";
    }

    public function walk()
    {
        echo "Estoy caminando";
    }
    public function greet($other_person)
    {
        echo "Hola" . $other_person;
    }
    <script>
    alert("Teh he hackeado");
    </script>
    public function __construct($name)
    {
        $this->name=$name;
    }
}

$person1=new Person("Bernardo");
$person2=new Person("Francisco");
$person1->greet("Sergio");


?php>

//Aplicando  typegen
<?php
//Permite ahora el tipo de datos dependiendo
//la version

//php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration
class Pet
{
    public $name="Firulais";
}

class Person
{
    public $age;
    public $name;
    private $money_in_wallet;
    private $todos;
    private $married;

    public function run()
    {
        echo "Estoy corriendo";
    }

    public function walk()
    {
        echo "Estoy caminando";
    }
    //Obligamos que tenga un tipo
    public function greet(Person $other_person)
    {
        echo "Hola" . $other_person;
    }
    public function __construct($name)
    {
        $this->name=$name;
    }

    public function adpot(Pet $instance_pet)
    {
        echo "Hey, adopté a " . $instance_pet->name;
    }
}

$person1=new Person("Bernardo");
$person2=new Person("Francisco");
$pet=new Pet();
$person1->greet($person2);
$person1->adpot($pet);


