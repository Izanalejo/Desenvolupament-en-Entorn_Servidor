<?php
/*Ejercicio 10: Mezclar arrays asociativos
Dado el siguiente array de estudiantes:
$estudiantes = [
    "001" => "Laura",
    "002" => "Carlos",
    "003" => "Marta"
];
Y el siguiente array de calificaciones:
$calificaciones = [
    "001" => 85,
    "002" => 92,
    "003" => 78
];
Escribe un código que combine ambos arrays en uno solo, 
donde cada clave sea el número de estudiante y el valor sea un 
sub-array con el nombre y la calificación.
Practicar la manipulación y fusión de arrays asociativos.
*/


$estudiantes = [
    "001" => "Laura",
    "002" => "Carlos",
    "003" => "Marta"
];
$calificaciones = [
    "001" => 85,
    "002" => 92,
    "003" => 78
];


print_r(array_merge_recursive($estudiantes,$calificaciones));

?>