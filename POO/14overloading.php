<?php
// Nota: la sobrecarga de metodos
// no es igual a lenguajes como java o C#,
// En php se refiere a generar metodos o 
// atributos dinamicos
class Person
{
    private $name;
    private $familyname;
    private $phone;
    private $mobile;

    public function __construct($name,$familyname,$phone,$mobile)
    {
    $this-> name=$name;
    $this-> familyname=$familyname;
    $this-> phone=$phone;
    $this-> mobile=$mobile;
    }
    public function __toString()
    {
        return $this->name . " " . $this->familyname . "," . $this->phone . " o " . $this->mobile . "\n";
    }

    public function getName()
    {
        return $this->name . "\n";
    }

    public function __call($name,$arguments)
    {
        $no_method=true;
    }
}
$persona = new Person("Bernardo","Pineda","555 5555","444 44444");
echo $persona;
echo $persona->getName();
