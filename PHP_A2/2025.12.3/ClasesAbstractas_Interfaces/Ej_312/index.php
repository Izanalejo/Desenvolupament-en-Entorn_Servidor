<?php
require_once("PersonaE.php");
require_once("Trabajador.php");
require_once("Empleado.php");
require_once("Gerente.php");

// Crear empleados
$emp1 = new Empleado("Ana", "Lopez", 25, 160, 15.5, [123456789]);
$emp2 = new Empleado("Luis", "Garcia", 30, 200, 20, [987654321, 666777888]);

// Crear gerentes
$ger1 = new Gerente("Carlos", "Ruiz", 45, 3000, [111222333]);
$ger2 = new Gerente("Maria", "Sanchez", 50, 4000);

// Mostrar información
echo Trabajador::toHtml($emp1);
echo Trabajador::toHtml($emp2);
echo Trabajador::toHtml($ger1);
echo Trabajador::toHtml($ger2);

// Verificar impuestos (solo Empleado tiene este método)
echo $emp1->getNombreCompleto() . " Debe pagar impuestos? " . ($emp1->debePagarImpuestos() ? "SI<br>" : "NO<br>");
echo $emp2->getNombreCompleto() . " Debe pagar impuestos? " . ($emp2->debePagarImpuestos() ? "SI<br>" : "NO<br>");
?>