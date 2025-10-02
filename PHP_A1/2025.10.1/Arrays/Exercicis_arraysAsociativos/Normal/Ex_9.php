<?php 
/*Ejercicio 9: Convertir un array asociativo en JSON

Crea un array asociativo con información básica de un 
estudiante (nombre, edad, carrera) y luego conviértelo 
a una cadena JSON utilizando la función json_encode(). 
Imprime el resultado.
*/



$estudiante = [
    "nombre" => "Laura Martínez",
    "edad" => 21,
    "carrera" => "Ingeniería Informática",
    "universidad" => "Universitat Plitècnica de Catalunya",
    "email" => "CorreoInventado@ucm.es",
    "Mitjana" => 8.7
];


echo json_encode($estudiante)



?> 