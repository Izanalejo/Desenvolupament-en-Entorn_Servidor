<?php
require_once __DIR__ . "/src/Modelo/314Persona.php";
require_once __DIR__ . "/src/Modelo/314Trabajador.php";
require_once __DIR__ . "/src/Modelo/314Empleado.php";
require_once __DIR__ . "/src/Modelo/314Gerente.php";
require_once __DIR__ . "/src/Modelo/314Empresa.php";
require_once __DIR__ . "/src/Modelo/JSerializable.php";

use App\Modelo\Empleado314\Empleado;
use App\Modelo\Gerente314\Gerente;
use App\Modelo\Empresa314\Empresa;

$empleado1 = new Empleado("Paco","Sanz",54,[660544675,665020402],200,8.5);
$gerente1 = new Gerente("Mariano", "Rajoy",40,[994342340],3200);
$empresa1 = new Empresa("ERU Corp","Mi casa xd");

echo "<p>El Empleado {$empleado1->getNombreCompleto()} cobrara: {$empleado1->calcularSueldo()} €</p>";
echo "<p>El Gerente {$gerente1->getNombreCompleto()} cobrara: {$gerente1->calcularSueldo()} €</p>";
echo "<h2>Empresa {$empresa1->getNombre()}</h2>";
$empresa1->añadirTrabajador($empleado1);
$empresa1->añadirTrabajador($gerente1);
echo "EMPLEADO Debe pagar impuestos? ".($empleado1->debePagarImpuestos()? "Si":"No")."<br>";
echo "GERENTE Debe pagar impuestos? ".($gerente1->debePagarImpuestos()? "Si":"No");

echo $empresa1->listarTrabajadoresHtml();
echo "<p>El total de las nominas de la empresa {$empresa1->getNombre()} es: <strong>{$empresa1->getCosteNominas()} €</strong></p>";

// echo "<h2>serialize</h2>";
// $cadena_serializada = serialize($gerente1);
// echo "<pre>";
// echo $cadena_serializada;
// echo "</pre>";
// echo "<h2>unserialize</h2>";
// $usuario_deserializado = unserialize($cadena_serializada);
// echo "<pre>";
// var_dump($usuario_deserializado);
// echo "</pre>";
// echo "<h2>json_encode</h2>";

// $objeto = new stdClass();
// $objeto->id = 1;
// $objeto->nombre = "Ejemplo";
// $objeto->valor = 123;

// $json_string = json_encode($objeto);
// echo "<pre>";
// echo $json_string;
// echo "</pre>";

$json_empleado = $empleado1->toJSON();
echo $json_empleado;
echo $empleado1;
file_put_contents("Empleados_JSON/Empleados.json", $json_empleado);

$serialize_empleado = $empleado1->toSerialize();
echo $serialize_empleado;
?>