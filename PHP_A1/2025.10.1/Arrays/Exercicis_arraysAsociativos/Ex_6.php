<?php
/*Ejercicio 6: Ordenar un array asociativo
Dado el siguiente array asociativo:
$productos = [
    "laptop" => 1000,
    "tablet" => 600,
    "smartphone" => 800,
    "monitor" => 300
];
Ordena los productos de acuerdo a su precio en orden ascendente utilizando
la función asort().
Luego, ordena las claves (productos) en orden alfabético con ksort().
*/


$productos = [
    "laptop" => 1000,
    "tablet" => 600,
    "smartphone" => 800,
    "monitor" => 300
];

asort($productos);

foreach ($productos as $key => $value) {
    echo "$key: $value<br/>";
}
echo "<br/><br/>";

ksort($productos);

foreach ($productos as $key => $value) {
    echo "$key: $value<br/>";
}

?>