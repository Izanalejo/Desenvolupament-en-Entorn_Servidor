<?php
    require_once('EmpleadoConstructor.php');


    $empleado1 = new Empleado("Izan", "Alejo", []); //NO asignem valor per tal de que sigui = 1000
    $empleado2 = new Empleado("Pepito", "Pérez", [], 2500); //Assignem 2500 per al sou

    echo  "Sueldo de " . $empleado1->getNombre() . ": " . $empleado1->getSueldo() . "<br>";
    echo "Sueldo de " . $empleado2->getNombre() . ": " . $empleado2->getSueldo() . "<br>";




?>