<?php
/*Ejercicio 7: Contar los elementos de un array
Crea un array asociativo que contenga los nombres de 5 países 
como claves y sus respectivas capitales como valores. 
Luego, escribe un código que cuente cuántos elementos tiene el
array y lo imprima en pantalla.
Usar la función count() para contar elementos en arrays asociativos.

*/
$paises = [
    "España" => "Madrid",
    "Francia" => "París",
    "Italia" => "Roma",
    "Alemania" => "Berlín",
    "Portugal" => "Lisboa"
];

echo "En total hay " . count($paises) . " paises";







?>