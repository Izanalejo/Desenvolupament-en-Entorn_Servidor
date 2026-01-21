<?php
require_once('EmpleadoStatic.php');

$e1 = new Empleado("Izan", "Alejo", 1200);
$e1->anyadirTelefono(666111222);
$e1->anyadirTelefono(933445566);

$e2 = new Empleado("Pepito", "Pérez", 3000);
$e2->anyadirTelefono(634574325);
$e2->anyadirTelefono(623434534);



echo Empleado::toHtml($e1);
echo Empleado::toHtml($e2);

?>