<?php
require_once ("PersonaE.php");
require_once ("EmpleadoE.php");

$e1 = new Empleado("Ana", "Lopez", 18, 2500, );
$e2 = new Empleado("Luis", "Garcia", 22, 4000, [123456789, 987654321]);

echo Empleado::toHtml($e1);
echo Empleado::toHtml($e2);

echo $e1->getNombreCompleto() . " Debe pagar impuestos? " . ($e1->debePagarImpuestos() ? "SI<br>" : "NO<br>");
echo $e2->getNombreCompleto() . " Debe pagar impuestos? " . ($e2->debePagarImpuestos() ? "SI<br>" : "NO<br>");
?>
