<?php
/*Ejercicio 5: Filtrar y mapear datos complejos
Dado un array de estudiantes con su nombre y calificaciones:
$estudiantes = [
    ["nombre" => "Laura", "calificaciones" => [8, 7, 9]],
    ["nombre" => "Carlos", "calificaciones" => [5, 6, 5]],
    ["nombre" => "Ana", "calificaciones" => [9, 9, 10]],
    ["nombre" => "Luis", "calificaciones" => [4, 3, 5]]
];
Escribe un código que:
Calcula el promedio de notas de cada estudiante, y añadelo al array 
$estudiantes como un elemento más del array: “promedio ” => 8
Filtre a los estudiantes que tienen 
un promedio de calificación mayor o igual a 6.
Cree un nuevo array que solo incluya 
el nombre del estudiante y su promedio de calificaciones.
El resultado debe ser algo así:
[
    ["nombre" => "Laura", "promedio" => 8],
    ["nombre" => "Ana", "promedio" => 9.33]
]
Combinar funciones de filtrado (array_filter) y mapeo (array_map) para procesar arrays complejos.
*/


$estudiantes = [
    ["nombre" => "Laura", "calificaciones" => [8, 7, 9]],
    ["nombre" => "Carlos", "calificaciones" => [5, 6, 5]],
    ["nombre" => "Ana", "calificaciones" => [9, 9, 10]],
    ["nombre" => "Luis", "calificaciones" => [4, 3, 5]]
];






?>