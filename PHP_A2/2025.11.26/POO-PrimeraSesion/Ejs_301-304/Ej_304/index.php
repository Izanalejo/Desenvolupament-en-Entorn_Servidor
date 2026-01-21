<?php
require('EmpleadoConstante.php');

$empleado1 = new Empleado("Izan", "Alejo", 2500);
$empleado2 = new Empleado("Pepito", "Pérez", 8000);

$empleado1->debePagarImpuestos(); // No debe pagar impuestos
$empleado2->debePagarImpuestos(); // Debe pagar impuestos




?>