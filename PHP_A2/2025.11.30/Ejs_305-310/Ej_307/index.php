<?php
require_once('Persona.php');
require_once('Empleado.php');


$e1 = new Empleado("Izan", "Alejo", 1200 );

echo $e1->getNombreCompleto() . "<br>";
echo $e1->getSueldo();

$e1->anyadirTelefono(666111222);
$e1->anyadirTelefono(933445566);

echo Empleado::toHtml($e1);

?>