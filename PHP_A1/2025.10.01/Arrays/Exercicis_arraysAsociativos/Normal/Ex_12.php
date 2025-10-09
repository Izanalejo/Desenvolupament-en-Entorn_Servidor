<?php
/* Ejercicio 12: Array multidimensional
Crea un array multidimensional que almacene información sobre varios 
productos de una tienda. Cada producto debe tener un nombre, un precio y 
una cantidad en stock. Luego, recorre el array e imprime la información de 
cada producto.
Trabajar con arrays asociativos multidimensionales.
*/


$products = [
    [
        "nombre" => "Harina",
        "precio" => 10.99,
        "stock" => 30
    ],
    [
        "nombre" => "Cereales",
        "precio" => 5.99,
        "stock" => 25
    ],
    [
        "nombre" => "Leche",
        "precio" => 3.25,
        "stock" => 50
    ],
    [
        "nombre" => "Huevos",
        "precio" => 5.00,
        "stock" => 20
    ],
    [
        "nombre" => "Pan",
        "precio" => 1.50,
        "stock" => 15
    ]
];

// Recorrer e imprimir
foreach ($products as $producto) {
    echo "<p><b>Producto: " . $producto["nombre"] . "</b></p>";
    echo "<ul>";
    echo "<li>Precio: " . $producto["precio"] . " €</li>";
    echo "<li>Stock: " . $producto["stock"] . " unidades</li>";
    echo "</ul>";
}
?>