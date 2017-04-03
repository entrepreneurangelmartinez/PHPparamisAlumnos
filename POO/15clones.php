<?php
//Aprendiendo el patron de diseño SINGLETON
//Lo que hace el patron es busca una sola instancia de esa clase
class DB
{
    private static $instance;
    public $name="";
    public static function getInstance()
    {
        if(null===static::$instance)
        {
            static::$instance=new static();
        }
        return static::$instance;
    }
    protected function __construct(){}
        public function getName()
        {
            return $this->name . "\n";   
    }
}
// $mySql=new DB;
$mysql=DB::getInstance();
$oracle=DB::getInstance();
// $sql_server=$mysql;
$sql_server=clone $mysql;

$mysql->name="MySQL";
echo $mysql->getName();
echo $oracle->getName();
echo $sql_server->getName();

?>