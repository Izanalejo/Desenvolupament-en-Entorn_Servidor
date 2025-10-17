<?php
/*Ejercicio 3: Fusión de arrays asociativos con resolución de conflictos
Tienes dos arrays asociativos que contienen información de clientes. Algunos clientes pueden aparecer 
en ambos arrays, pero con diferentes números de pedidos. Necesitas fusionar ambos arrays y, 
en caso de conflicto (es decir, cuando un cliente esté en ambos arrays), debes sumar los pedidos.

$clientesA = [
    "Juan" => 3,
    "Ana" => 5,
    "Carlos" => 1
];


$clientesB = [
    "Ana" => 2,
    "Carlos" => 4,
    "Pedro" => 1
];
El resultado debería ser:
[
    "Juan" => 3,
    "Ana" => 7, // Suma de pedidos de Ana
    "Carlos" => 5, // Suma de pedidos de Carlos
    "Pedro" => 1
]
Aplicar lógica avanzada de manipulación de arrays para fusionar y manejar conflictos entre datos.
*/

$clientesA = [
    "Juan" => 3,
    "Ana" => 5,
    "Carlos" => 1
];

$clientesB = [
    "Ana" => 2,
    "Carlos" => 4,
    "Pedro" => 1
];

//Funcion que fusiona los dos arrays y suma si hay coincidencias
function agruparClientes($arrayA, $arrayB){

    foreach ($arrayA as $nombre => $pedidos) {
        $resultado[$nombre] = $pedidos;
        
    }
    foreach ($arrayB as $nombre => $pedidos) {
        if(array_key_exists($nombre, $resultado)){
            $resultado[$nombre] += $pedidos;
        }else{
            $resultado[$nombre] = $pedidos;
        }
    }
    return $resultado;
}

//Funcion que imprime el array resultante

function imprimirClientes($arrayClientes){
    echo "<h1>Fusión de arrays Clientes A y B</h1>";

    foreach ($arrayClientes as $nombre => $pedidos) {
        echo "$nombre:" . "$pedidos<br>";
    }
}

//main

$final = agruparClientes($clientesA, $clientesB);

imprimirClientes($final); 

?>

