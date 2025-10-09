<?php
/*
Ejercicio 1: Agrupación de datos complejos
Tienes un array de empleados donde cada empleado 
tiene un nombre, una posición y el departamento en 
el que trabaja. El objetivo es reorganizar el array 
para que los empleados estén agrupados por departamento.

$empleados = [
    ["nombre" => "Carlos", "posición" => "Desarrollador", "departamento" => "IT"],
    ["nombre" => "Ana", "posición" => "Diseñadora", "departamento" => "Marketing"],
    ["nombre" => "Luis", "posición" => "Analista", "departamento" => "IT"],
    ["nombre" => "Marta", "posición" => "Jefa de Producto", "departamento" => "Ventas"]
];
Agrupa los empleados por departamento y luego imprime los resultados. El resultado debe tener este formato:
IT:
    - Carlos, Desarrollador
    - Luis, Analista
Marketing:
    - Ana, Diseñadora
Ventas:
    - Marta, Jefa de Producto
Manipular arrays multidimensionales y agrupar datos utilizando estructuras asociativas.
*/

$empleados = [
    ["nombre" => "Carlos", "posición" => "Desarrollador", "departamento" => "IT"],
    ["nombre" => "Ana", "posición" => "Diseñadora", "departamento" => "Marketing"],
    ["nombre" => "Luis", "posición" => "Analista", "departamento" => "IT"],
    ["nombre" => "Marta", "posición" => "Jefa de Producto", "departamento" => "Ventas"]
];

//Función que agrupa por departamento

function agruparPorDepartamento($empleados): array {
    $agrupadosPorDepartamento = [];

    foreach ($empleados as $empleado) {
        $departamento = $empleado['departamento']; 

        $agrupadosPorDepartamento[$departamento][] = $empleado['nombre'];
    }
    return $agrupadosPorDepartamento;
}

function imprimirEmpleadosPorDepartamento($arrayAgrupado){
    echo "<h1>Trabajadores por departamento</h1>";

    foreach ($arrayAgrupado as $departamento => $nombres) {
        echo "<h2>$departamento </h2>";
        foreach ($nombres as $nombre) { //Se hace otro foreach porque $nombre és ptro array a recorrer
            echo "· $nombre<br>";
        } 
    }
}

//main

$agrupadosPorEmpleados = [];
$agrupadosPorEmpleados = agruparPorDepartamento($empleados);

imprimirEmpleadosPorDepartamento($agrupadosPorEmpleados);

?>