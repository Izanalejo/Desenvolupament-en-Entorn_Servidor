<?php
require_once "App/Modelo/Soporte.php";
require_once __DIR__ . "/App/Modelo/CintaVideo.php";
require_once __DIR__ . "/App/Modelo/Dvd.php";
require_once __DIR__ . "/App/Modelo/Juego.php";
require_once __DIR__ . "/App/Modelo/Cliente.php";


use App\Modelo\Soporte;
use App\Modelo\CintaVideo;
use App\Modelo\Dvd;
use App\Modelo\Juego;
use App\Modelo\Cliente;


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

// Ejercicio 323
$miJuego = new Juego("FIFA 23", 25, 59.99, "PS5", 1, 4);
echo "<strong>" . $miJuego->titulo . "</strong>";
echo "<br>Precio: " . $miJuego->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miJuego->getPrecioConIVA() . " euros";
$miJuego->muestraResumen();
echo $miJuego->muestraJugadoresPosibles();

$miJuego2 = new Juego("Mario Kart 8", 26, 49.99, "Switch", 1, 4);
echo "<strong>" . $miJuego2->titulo . "</strong>";
echo "<br>Precio: " . $miJuego2->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miJuego2->getPrecioConIVA() . " euros";
$miJuego2->muestraResumen();
echo $miJuego2->muestraJugadoresPosibles();

/// Ejercicio 324

$cliente1 = new Cliente("Izan Alejo",  123);
echo "<h2>Datos del cliente:</h2>";
$cliente1->muestraResumen();

//Ejercicio 325
echo "<h2>Alquiler de soportes:</h2>";
$cliente1->alquilar($miDvd);
$cliente1->tieneAlquilado($miDvd);
$cliente1->alquilar($miCinta);
$cliente1->tieneAlquilado($miCinta);
$cliente1->alquilar($miJuego);
$cliente1->tieneAlquilado($miJuego);

$cliente1->alquilar($miJuego); // Debería fallar por límite de alquileres concurrentes
$cliente1->alquilar($miJuego2); // Debería fallar por límite de alquileres concurrentes

$cliente1->muestraResumen();



?>