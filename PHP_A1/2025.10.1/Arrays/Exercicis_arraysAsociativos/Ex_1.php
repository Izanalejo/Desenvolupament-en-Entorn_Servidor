<?php
/*Ejercicio 1: Crear un array asociativo básico

Crea un array asociativo que contenga los siguientes elementos:
Nombre: "Juan"
Edad: 25
Ciudad: "Madrid"
Luego, imprime en pantalla cada uno de los elementos del array.
*/

$datos = [

    "Nombre" => "Juan",
    "Edad" => 25,
    "Ciudad" => "Madrid"
];

foreach ($datos as $valor) {
    echo "$valor <br />";
}



?>