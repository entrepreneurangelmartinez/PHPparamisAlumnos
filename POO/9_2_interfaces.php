<?php
// ¿Qué son las interfaces?

// Las interfaces de objetos permiten crear
// codigo con el cual especificamos qué métodos
// deben ser implementados por una clase.

// Las interfaces son definidas utilizando la
// palabra clase interface, de la misma forma
// que con clases estándar, pero sin métodos que
// tengan su contenido definido

// Todos los métodos declarados en una interfaz
// deben ser públicos

// Para implementar una interfaz, se utiliza else
// operador implements. Todos los métodos en una
// interfaz deben ser implementados dentro de la clase;
// el no cumplir con esta regla resultará en un error
// fatal. Las clases pueden implementar más de una interfaz
// si se deseara, separándolas cada una, por una coma.

// Las interfaces se pueden extender al igual que las clases
// utilizando el operador extends. La clase que implemente una
// interfaz debe utilizar exactamente las mismas estructuras
// de métodos que fueron definidos en la interfaz. De no cumplir
// esta regla, se generará un error fatal.

interface Auto{
    public function encender();
    public function apagar();
}
interface gasolina extends Auto{
    public function vaciarTanque();
    public function llenarTanque($cant);
}

class Deportivo implements gasolina{

    private $estado=false;
    private $tanque=0;
    
    public function estado(){
        if($this->estado)
        {
            print "El auto esta encendido";
        }
        else
        {
            print "El auto esta apagado";
        }
    }
    public function ver(){
        echo "Hola";}

        public function vaciarTanque()
        {

        }
        public function llenarTanque($cant)
        {

        }

        // public function encender(){

        // }
        // public function apagar(){

        // }

}
$obj=new Deportivo();
$obj->ver();