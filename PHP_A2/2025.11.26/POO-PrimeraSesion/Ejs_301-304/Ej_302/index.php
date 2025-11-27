<?php
require('EmpleadoTelefonos.php');

    $empleado1 = new Empleado("Izan","Alejo", 2500, []);
    $empleado2 = new Empleado("Pepito","Pérez", 8000, []);

    $empleado1->anyadirTelefono(620489231);
    $empleado1->anyadirTelefono(647583293);
    $empleado2->anyadirTelefono(674277003);

echo $empleado1->listarTelefonos();
echo $empleado2->listarTelefonos();

$empleado1->eliminarTelefonos();
$empleado2->eliminarTelefonos();

echo $empleado1->listarTelefonos();
echo $empleado2->listarTelefonos();



?>