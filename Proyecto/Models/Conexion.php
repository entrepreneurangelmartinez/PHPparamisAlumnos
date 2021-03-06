<?php namespace Models;

class Conexion{
    private $datos=array(
        "host"=>"localhost",
        "user"=>"root",
        "pass"=>"carter",
        "db"=>"proyecto"
    );
    private $con;
    public function __construct()
    {
        //Cuando se usa namespaces hay que agregarle el enlace convertidor
        $this->con=new \mysqli($this->datos["host"],
        $this->datos["user"], $this->datos["pass"],
        $this->datos["db"]);
    }
    public function consultaSimple($sql){
        $this->con->query($sql);
    }
    public function consultaRetorno($sql)
    {
        $datos=$this->con->query($sql);
        return $datos;
    }
}