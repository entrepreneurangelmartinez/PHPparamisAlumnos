<?php

//Determinar existencia de una clase

class BabyBum {
    public $name="Nirvana lambada";
    public function makeSound()
    {
        echo "Miauhogo\n";
    }

    
}
class PasitoaPasito {
    public $name="Suave suavecito";
    public function makeSound()
    {
        echo "Miauhogo\n". $name;
    }
}

$classes=["BabyBum","Animal","PasitoaPasito"];
foreach ($classes as $class) {
    # code...
    echo $class . (class_exists($class) ? " si":" no"). "\n";
}