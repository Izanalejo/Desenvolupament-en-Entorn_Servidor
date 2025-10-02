<?php
/*Ejercicio 8: Sumar los valores de un array
Dado el siguiente array:
$ventas = [
    "Enero" => 1500,
    "Febrero" => 1200,
    "Marzo" => 1700,
    "Abril" => 900
];
*/


$ventas = [
    "Enero" => 1500,
    "Febrero" => 1200,
    "Marzo" => 1700,
    "Abril" => 900
];


echo "La suma es: " . array_sum($ventas);



?>