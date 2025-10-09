<?php
/*Ejercicio 7: Agrupación y agregación de datos de transacciones

Tienes un array de transacciones donde cada transacción tiene un ID de cliente, el total 
y la fecha. Debes agrupar las transacciones por cliente y calcular el total gastado por 
cada uno.
$transacciones = [
    ["cliente" => "001", "total" => 100, "fecha" => "2024-01-10"],
    ["cliente" => "002", "total" => 200, "fecha" => "2024-01-12"],
    ["cliente" => "001", "total" => 50, "fecha" => "2024-01-15"],
    ["cliente" => "003", "total" => 300, "fecha" => "2024-01-20"],
    ["cliente" => "002", "total" => 150, "fecha" => "2024-01-25"]
];
El resultado debería ser un array con los clientes como claves y el total gastado como valor:
[
    "001" => 150,
    "002" => 350,
    "003" => 300
]
Agrupar y sumar datos usando arrays asociativos complejos.
Resumen funciones array
array_walk: Modifica el array original aplicando una función a cada 
elemento.
array_filter: Filtra elementos de un array basado en una condición.
array_map: Aplica una función a cada elemento y devuelve un nuevo array.
array_reduce: Reduce el array a un solo valor acumulando resultados.*/

$transacciones = [
    ["cliente" => "001", "total" => 100, "fecha" => "2024-01-10"],
    ["cliente" => "002", "total" => 200, "fecha" => "2024-01-12"],
    ["cliente" => "001", "total" => 50, "fecha" => "2024-01-15"],
    ["cliente" => "003", "total" => 300, "fecha" => "2024-01-20"],
    ["cliente" => "002", "total" => 150, "fecha" => "2024-01-25"]
];

function agruparPorCliente($transacciones){
    $agrupadosPorCliente = [];
    foreach ($transacciones as $transaccion) {
        $cliente = $transaccion['cliente'];
        $agrupadosPorCliente[$cliente][] = $transaccion['total'];
    }
    return $agrupadosPorCliente;
}

function imprimirClientes($arrayAgrupado){
    echo"<h1>Clientes y totales</h1>";
    foreach ($arrayAgrupado as $cliente => $total) {
        echo "<h2>Client $cliente </h2>" . "Quantitat total: " . array_sum($total) . "€" . "<br><br>";
    }
}



//main

$agruparPorCliente = agruparporCliente($transacciones);

imprimirClientes($agruparPorCliente);

?>