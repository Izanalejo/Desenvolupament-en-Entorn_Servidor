<?php
/*
Ejercicio 4: Agregar y eliminar elementos
Al array $persona añade una nueva clave llamada "país" con el valor "España".
Elimina la clave "edad".
Imprime el array resultante.
*/

$persona = [
    "nombre" => "Ana",
    "edad" => 30,
    "profesion" => "Ingeniera",
    "país" => "España"
];

unset($persona["edad"]);

foreach ($persona as $key => $value) {
    echo "$key: $value<br/>";
}

?>