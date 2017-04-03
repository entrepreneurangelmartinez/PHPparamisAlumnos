<?php
// try{
//     throw new Exception("No hay archivo de configuración");
// }
// catch(Exception $e)
// {
//     echo "Hubo error" . $e->getMessage();
// }
// finally{
//     echo "Cerrando BD";
// }

//Generando nuestra propia excepcion
class DBException extends Exception
{
    
}

class Main
{
    public function __construct()
    {
        try{

        }
        catch(Exception $e)
        {
            echo "Error generico : " . $e->getMessage();
            
        }

        try{
            throw new DBException("No hay conexion");
        }
        catch(DBException $e)
        {
            echo "Error especifico : " . $e->getMessage();
            
        }

         try{
            throw new Exception("No hay conexion");
        }
        catch(Exception $e)
        {
            echo "Error generico : " . $e->getMessage();
        }
        catch(DBException $e)
        {
            echo "Error especifico : " . $e->getMessage();
            
        }



           try{
            throw new DBException("No hay conexion");
            //throw new DBException("No hay expacio en memoria");
        }
         catch(DBException $e)
        {
            echo "Error especifico : " . $e->getMessage();
            
        }
        catch(Exception $e)
        {
            echo "Error generico : " . $e->getMessage();
        }
       
        
    }
}
$main=new Main();
?>
