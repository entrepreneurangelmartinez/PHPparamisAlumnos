<?php
// function app_autoloader($class)
// {
//     include $class . ".php";
//     // include "classes/" .  $class . ".php";
    
// }

//primer manera
// spl_autoload_register("app_autoloader");

//segunda manera con clases anonimas a partir de 5.3

spl_autoload_register(function($class)
{
    //include $class . ".php";
    include "at/bistro/" . $class .".php";
});



