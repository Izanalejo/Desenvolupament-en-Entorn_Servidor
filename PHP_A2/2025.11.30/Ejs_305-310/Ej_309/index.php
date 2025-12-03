<?php
require_once "PersonaH.php";
require_once "EmpleadoE.php";

$emp1 = new Empleado("Ana", "García", 25, 3500);
$emp2 = new Empleado("Luis", "Martínez", 20, 4000);

$emp1->debePagarImpuestos(); // Debe pagar impuestos
$emp2->debePagarImpuestos(); // No debe pagar impuestos 

echo $emp1 ->getNombreCompleto(). "debe pagar impuestos: " . ($emp1->debePagarImpuestos() ? "Sí" : "No") . "<br>";
echo $emp2 ->getNombreCompleto(). "debe pagar impuestos: " . ($emp2->debePagarImpuestos() ? "Sí" : "No") . "<br>";



?>