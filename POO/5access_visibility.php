<?php
//Tipos de accesos
//- publico o privado
class MyProfile
{
    // public $email;
    private email="b@correo-com";
    public $name;
    public $last_name;
    public function __construct()
    {

    }
    //Se crea un metodo publico para que tenga
    //acceso a la propiedad email;
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        //Reglas para la asignación de nuestro correo
        $this->email=$email;
    }
    private function getDetails()
    {
        //Obtener datos desde un repositorio
        
    }
}
$instMyProfile = new MyProfile();
$instMyProfile->email="amartinez@advanced-consulting.biz";
echo $instMyProfile->getEmail();