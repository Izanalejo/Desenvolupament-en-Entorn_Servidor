<?php
require("Empleado.php");

    $empleado1 = new Empleado("Izan","Alejo", 2500);

    echo $empleado1->getNombreCompleto();

    $empleado1->debePagarImpuestos();

?>