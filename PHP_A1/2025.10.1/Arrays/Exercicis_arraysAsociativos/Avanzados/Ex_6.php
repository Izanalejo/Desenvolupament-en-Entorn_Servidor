<?php
/*Ejercicio 6: Crear un índice invertido
Tienes un array que asocia usuarios a sus intereses:
$usuarios = [
    "Juan" => ["fútbol", "cine", "música"],
    "Ana" => ["cine", "moda"],
    "Carlos" => ["fútbol", "videojuegos", "música"]
];
Escribe un código que cree un índice invertido, donde cada interés sea una clave y el valor sea un array de 
usuarios interesados en ese tema. 

El resultado debería verse así:
[
    "fútbol" => ["Juan", "Carlos"],
    "cine" => ["Juan", "Ana"],
    "música" => ["Juan", "Carlos"],
    "moda" => ["Ana"],
    "videojuegos" => ["Carlos"]
]
Practicar la inversión de claves y valores en arrays multidimensionales.
*/

$usuarios = [
    "Juan" => ["fútbol", "cine", "música"],
    "Ana" => ["cine", "moda"],
    "Carlos" => ["fútbol", "videojuegos", "música"]
];

function crearIndiceInvertido($usuarios){
    $indiceInvertido = [];
    foreach ($usuarios as $usuario => $intereses) {
        foreach ($intereses as $interes) {
        $indiceInvertido[$interes][] = $usuario;
        }
    }
    return $indiceInvertido;
}

function imprimirResultados($arrayInvertido){
    echo "<h1>Intereses y usuarios</h1>";
    foreach ($arrayInvertido as $interes => $nombres) {
        echo "<strong>$interes:</strong> ";
        echo implode(", ", $nombres); // Une los nombres con coma
        echo "<br><br>";
    }
}

//main

$resultado = crearIndiceInvertido($usuarios);

imprimirResultados($resultado);



















/* function crearIndiceInvertido($usuarios) {
    $indiceInvertido = [];
    
    // Recorremos cada usuario y sus intereses
    foreach ($usuarios as $usuario => $intereses) {
        // Para cada interés del usuario
        foreach ($intereses as $interes) {
            // Si el interés no existe en el índice, creamos un array vacío
            if (!isset($indiceInvertido[$interes])) {
                $indiceInvertido[$interes] = [];
            }
            // Agregamos el usuario al array de interesados
            $indiceInvertido[$interes][] = $usuario;
        }
    }
    
    return $indiceInvertido;
}

$resultado = crearIndiceInvertido($usuarios);
echo "<pre>";
print_r($resultado);
echo"</pre>";
 */

?>