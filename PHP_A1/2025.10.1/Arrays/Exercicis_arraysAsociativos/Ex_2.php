<?php
/* 
Ejercicio 2: Recorrer un array asociativo
Dado el siguiente array asociativo:
$persona = [
    "nombre" => "Ana",
    "edad" => 30,
    "profesión" => "Ingeniera"
];
Recorre el array utilizando un foreach e imprime en pantalla tanto las claves como los valores en el siguiente formato:
Clave: nombre, Valor: Ana
Clave: edad, Valor: 30
Clave: profesión, Valor: Ingeniera

*/


$persona = [
    "nombre" => "Ana",
    "edad" => 30,
    "profesión" => "Ingeniera"
];


foreach ($persona as $key => $value) {
    echo "$key: $value<br/>";
}


?>