<?php
include_once "../Model/PuntosModel.php";

class PuntosController{

    public function Index(){

        $puntosModels=new PuntosModel(2,"angel");
        
        echo $puntosModels->get_Nombre();  
        $puntosModels1=new PuntosModel(1,"alex");
          
        $puntosModels2=new PuntosModel(4,"gerardo");
  
        //$Listamodelos = array('puntaje1' => n , );

        //$Eloquent elo=new $Eloquent();
        // elo.add()
        // return 
    }
}
$Puntaje =new PuntosController();
$Puntaje->Index();