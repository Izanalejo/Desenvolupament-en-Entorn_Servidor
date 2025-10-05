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

/*
Paso 1: Creamos una función que reciba ambos arrays y los fusione.
*/
function fusionarClientes($arrayA, $arrayB) {
    // Array donde guardaremos el resultado final
    $resultado = [];

    // Paso 2: Recorremos el primer array y copiamos sus valores
    foreach ($arrayA as $nombre => $pedidos) {
        $resultado[$nombre] = $pedidos;
    }

    // Paso 3: Recorremos el segundo array
    foreach ($arrayB as $nombre => $pedidos) {
        // Si el cliente ya existe, sumamos los pedidos
        if (array_key_exists($nombre, $resultado)) {
            $resultado[$nombre] += $pedidos;
        } else {
            // Si no existe, lo añadimos directamente
            $resultado[$nombre] = $pedidos;
        }
    }

    // Paso 4: Devolvemos el array final
    return $resultado;
}

// Paso 5: Llamamos a la función y mostramos el resultado
$clientesFusionados = fusionarClientes($clientesA, $clientesB);

echo "<pre>";
print_r ($clientesFusionados);
echo "</pre>";
?>

