<?php
class PuntosModel{
   private $Puntaje;
   private $Nombre;
   
   public function __construct($Puntaje,$Nombre){
   $this->Puntaje = $Puntaje;
   $this->Nombre = $Nombre;
   }

public function get_Puntaje()
    {
        return $this->Puntaje;
    }
   public function get_Nombre()
    {
        return $this->Nombre;
    }
   public function set_Puntaje($Puntaje)
    {
        $this->Puntaje=$Puntaje;
    }
   public function set_Nombre($Nombre)
    {
        $this->Nombre=$Nombre;
    }
}