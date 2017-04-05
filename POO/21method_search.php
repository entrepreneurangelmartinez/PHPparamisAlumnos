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


$inst=new BabyBum();

// La función de PHP var_dump() muestra el tipo de variable y su contenido, en el caso de los arrays muestra el tipo de contenido de cada campo.

// Es muy parecida a la función PHP var_export(), la diferencia radica en que esta última muestra el mismo resultado pero en código PHP interpretable.

// Otras funciones para mostrar el contenido de variables, cadenas de texto o arrays/objetos son: PHP echo, PHP print(), printf y print_r().
var_dump(get_class_methods($inst));