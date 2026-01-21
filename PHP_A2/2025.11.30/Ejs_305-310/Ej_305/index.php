<?php
require_once('EmpleadoSueldo.php');

$e1 = new Empleado("Izan", "Alejo", 1200, []);
$e2 = new Empleado("Ana", "Lopez", 2800);


Empleado::setSueldoTope(3333);
echo "El sueldo máximo de cualquier empleado son " . Empleado::getSueldoTope() . " €<br>";


Empleado::setSueldoTope(4000);
echo "El sueldo máximo de cualquier empleado son " . Empleado::getSueldoTope() . " €<br>";

?>