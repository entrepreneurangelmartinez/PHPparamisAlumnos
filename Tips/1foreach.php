<?php

$numbers=array(12,45,22,34,65);

foreach($numbers as $number)
{
    echo "This is number " . $number. "<br />\n";
}

$ages=array(
    "Jhon"=>35,
    "Mary"=>27,
    "Bob"=>55
);

foreach($ages as $name=>$age)
{
    echo $age . "<br/>\n";
    echo $name . "is" . $age . "years old <br/>";
}
?>