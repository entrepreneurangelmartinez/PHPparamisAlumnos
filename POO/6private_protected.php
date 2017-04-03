<?php
//Protegiendo integridad de la clase y la jerarquia
//Determinar uso de protected y private
class BaseProfile
{
    //Emulando conexion
    private $connection_data="Conexion BD";
    //modificando el acceso de private 
    //a protected
    //Protected puede ser accesible a la class_exists
    //padre y la clase hija como privado.
    private function connect2DB()
    {
        echo $this->connection_data;
    }

    public function __construct()
    {
        $this->connect2DB();
    }
    
}

class MyProfile extends BaseProfile
{
    public $name;
    public $last_name;
    public function __construct()
    {
        //extendiendo la funcionalidad base64_decode
        $this->connect2DB;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public tunction setEmail($email)
    {
        //Reglas para la asignación de nuestro correo
        $this->email=$email;
    }
}
$intsBase=new BaseProfile;
$intsBase=new MyProfile;