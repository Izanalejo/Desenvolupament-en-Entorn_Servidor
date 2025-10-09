<?php
/*Ejercicio 5: Comprobar si una clave existe
Dado el array:
$auto = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "año" => 2018
];

Escribe un código en PHP que verifique si la clave "color"
 existe en el array. Si no existe, añade la clave "color" con 
 el valor "rojo" y luego imprime el array.
Aprender a verificar la existencia de claves usando la función 
array_key_exists() o isset().
*/


$auto = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "año" => 2018
];

foreach ($auto as $key => $value) {
    echo "$key: $value<br/>";
}
echo "<br />";

if(array_key_exists("color", $auto)){
    echo "La clave existe! <br><br>";
}else{
    $auto = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "año" => 2018,
    "color" => "rojo"
];
}

foreach ($auto as $key => $value) {
    echo "$key: $value<br/>";
}

?>