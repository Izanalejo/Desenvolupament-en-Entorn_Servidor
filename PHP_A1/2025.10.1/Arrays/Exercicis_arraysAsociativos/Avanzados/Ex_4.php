<?php
/*Ejercicio 4: Ordenación personalizada en array multidimensional
Tienes un array de productos en el siguiente formato:
$productos = [
    ["nombre" => "Laptop", "precio" => 1000, "stock" => 50],
    ["nombre" => "Tablet", "precio" => 600, "stock" => 30],
    ["nombre" => "Smartphone", "precio" => 800, "stock" => 70],
    ["nombre" => "Monitor", "precio" => 300, "stock" => 20]
];
Escribe un código en PHP que ordene los productos:
Primero por precio en orden descendente.
Si el precio es el mismo, ordenar por stock en orden ascendente.
Usar usort() o una función de comparación personalizada para ordenar 
arrays multidimensionales según múltiples criterios.
*/
$productos = [
    ["nombre" => "Laptop", "precio" => 1000, "stock" => 50],
    ["nombre" => "Tablet", "precio" => 600, "stock" => 30],
    ["nombre" => "Smartphone", "precio" => 800, "stock" => 70],
    ["nombre" => "Monitor", "precio" => 300, "stock" => 20]
];

usort($productos, function($a, $b) {
    // Ordenar por precio descendente
    if ($a['precio'] !== $b['precio']) {
        return $b['precio'] <=> $a['precio'];
    }
    // Si el precio es igual, ordenar por stock ascendente
    return $a['stock'] <=> $b['stock'];
});

// Mostrar el resultado ordenado
foreach ($productos as $producto) {
    echo "{$producto['nombre']} - Precio: {$producto['precio']} - Stock: {$producto['stock']}<br>";
}

?>