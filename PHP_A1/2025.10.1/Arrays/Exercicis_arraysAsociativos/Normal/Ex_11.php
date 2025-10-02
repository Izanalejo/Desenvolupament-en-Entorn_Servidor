<?php
/*Ejercicio 11: Filtrar un array asociativo
Dado el array de ventas:
$ventas = [
    "Juan" => 1500,
    "María" => 2500,
    "Luis" => 900,
    "Ana" => 1700
];
Escribe un código que filtre el array para mostrar solo los
vendedores que hayan hecho ventas superiores a 1000.
Aplicar la función array_filter() para filtrar valores en un array asociativo.
*/

$ventas = [
    "Juan" => 1500,
    "María" => 2500,
    "Luis" => 900,
    "Ana" => 1700
];

$ventasFiltradas = array_filter($ventas, function($venta) {
    return $venta > 1000;
});

foreach ($ventasFiltradas as $vendedor => $cantidad) {
    echo "$vendedor: $cantidad <br>";
}

?>