<?php
/*Ejercicio 3: Modificar un valor en el array
A partir del array asociativo del ejercicio anterior, 
cambia el valor de la clave "profesión" a "Desarrolladora Web" 
y luego imprime todo el array modificado. */

$persona = [
    "nombre" => "Ana",
    "edad" => 30,
    "profesion" => "Ingeniera"
];



foreach ($persona as $key => $value) {
    echo "$key: $value<br/>";
}
echo "<br/>";

$persona["profesion"] = "Desarrolladora Web";

foreach ($persona as $key => $value) {
    echo "$key: $value<br/>";
}



?>