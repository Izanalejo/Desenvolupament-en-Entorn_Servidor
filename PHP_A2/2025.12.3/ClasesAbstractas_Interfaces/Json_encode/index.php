<?php
require_once("PersonaE.php");
require_once("Trabajador.php");
require_once("Empleado.php");
require_once("Gerente.php");

use TrabajadorE\Empleado;
use TrabajadorE\Gerente;

$ger1 = new Gerente("Carlos", "Ruiz", 45, 3000, [111222333]);
$ger2 = new Gerente("Maria", "Sanchez", 50, 4000);

// Crear empleados
$emp1 = new Empleado("Ana", "Lopez", 25, 160, 15.5, [123456789]);
$emp2 = new Empleado("Luis", "Garcia", 30, 200, 20, [987654321, 666777888]);




$objeto = new stdClass();

$objeto->nombre = "Ejemplo";
$objeto->valor = 123;


$json_string = json_encode($objeto);

echo "<pre>";
var_dump($json_string);
echo "</pre>";

$jsondecode = json_decode($json_string);

echo "<pre>";
var_dump($jsondecode);  
echo "</pre>";