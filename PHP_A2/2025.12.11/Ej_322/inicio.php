<?php
require_once "App\Modelo\Soporte.php";
require_once __DIR__ . "/App/Modelo/CintaVideo.php";
require_once __DIR__ . "/App/Modelo/Dvd.php";

use App\Modelo\Soporte;
use App\Modelo\CintaVideo;
use App\Modelo\Dvd;

$soporte1 = new Soporte("Tenet", 22, 3); 
echo "<strong>" . $soporte1->titulo . "</strong>"; 
echo "<br>Precio: " . $soporte1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros";
$soporte1->muestraResumen();

// Ejercicio 321


$miCinta = new CintaVideo("Los cazafantasmas", 23, 3.5, 107); 
echo "<strong>" . $miCinta->titulo . "</strong>"; 
echo "<br>Precio: " . $miCinta->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $miCinta->getPrecioConIva() . " euros";
$miCinta->muestraResumen();

// Ejercicio 322
$miDvd = new Dvd("Matrix", 24, 4.5, "Español", "16:9");
echo "<strong>" . $miDvd->titulo . "</strong>";
echo "<br>Precio: " . $miDvd->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miDvd->getPrecioConIVA() . " euros";
$miDvd->muestraResumen();
?>