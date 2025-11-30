<?php
require_once('Persona.php');
require_once('Empleado.php');


$e1 = new Empleado("Izan", "Alejo", 1200 );

echo $e1->getNombreCompleto() . "<br>";
echo $e1->getSueldo();

?>