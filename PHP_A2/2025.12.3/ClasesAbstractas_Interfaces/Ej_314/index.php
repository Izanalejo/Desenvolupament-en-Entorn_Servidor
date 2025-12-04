<?php
require_once("PersonaE.php");
require_once("Trabajador.php");
require_once("Empleado.php");
require_once("Gerente.php");

use TrabajadorE\Empleado;
use TrabajadorE\Gerente;

$ger1 = new Gerente("Carlos", "Ruiz", 45, 3000, [111222333]);
$ger2 = new Gerente("Maria", "Sanchez", 50, 4000);

// Crear empleados
$emp1 = new Empleado("Ana", "Lopez", 25, 160, 15.5, [123456789]);
$emp2 = new Empleado("Luis", "Garcia", 30, 200, 20, [987654321, 666777888]);

 /* // Crear gerentes

// Mostrar información
echo $emp1->toHtml();
echo $emp2->toHtml();
echo $ger1->toHtml();
echo $ger2->toHtml();

// Verificar impuestos
$trabajadores = [$emp1, $emp2, $ger1, $ger2];
foreach ($trabajadores as $t) {
    echo $t->getNombreCompleto() . " Debe pagar impuestos? " . ($t->debePagarImpuestos() ? "SI<br>" : "NO<br>");
}
 
 */


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <p><b>JSON:</b><?=  $ger1->toJSON(); ?></p>
 </body>
 </html>ml