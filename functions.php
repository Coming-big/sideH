<?php

function sum($num1, $num2){
    return $num1 + $num2 ."<br>";
}

echo sum(43,56);
echo sum(3453,56);
echo sum(43,656);


function subtract($num1, $num2){
    return $num2 - $num1 ."<br>";
}

echo subtract(34,35);
echo subtract(34,64);
echo subtract(34,104);

function name($name){
    echo $name ."<br>";
}

name("Sam");
name("Samosa");

name("Samuel");


?>