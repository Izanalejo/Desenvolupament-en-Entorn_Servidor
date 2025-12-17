<?php

namespace App\Modelo;

class Videoclub
{
    private string $nombre;
    private array $productos;
    private int $numProductos;
    private array $socios;
    private int $numSocios;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $this->productos = [];
        $this->numProductos = 0;
        $this->socios = [];
        $this->numSocios = 0;
    }

    private function incluirProducto(Soporte $producto): void
    {
        $this->productos[] = $producto;
        $this->numProductos++;
        echo "Producto incluido: {$producto->titulo}<br>";
    }

    public function incluirCintaVideo(string $titulo, float $precio, int $duracion): void
    {
        $numero = $this->numProductos + 1;
        $cinta = new CintaVideo($titulo, $numero, $precio, $duracion);
        $this->incluirProducto($cinta);
    }

    public function incluirDvd(string $titulo, float $precio, string $idiomas, string $pantalla): void
    {
        $numero = $this->numProductos + 1;
        $dvd = new Dvd($titulo, $numero, $precio, $idiomas, $pantalla);
        $this->incluirProducto($dvd);
    }

    public function incluirJuego(string $titulo, float $precio, string $consola, int $minJ, int $maxJ): void
    {
        $numero = $this->numProductos + 1;
        $juego = new Juego($titulo, $numero, $precio, $consola, $minJ, $maxJ);
        $this->incluirProducto($juego);
    }

    public function incluirSocio(string $nombre, int $maxAlquileresConcurrentes = 3): void
    {
        $numeroSocio = $this->numSocios + 1;
        $cliente = new Cliente($nombre, $numeroSocio, $maxAlquileresConcurrentes);
        $this->socios[] = $cliente;
        $this->numSocios++;
        echo "Socio incluido: {$nombre} (Número: {$numeroSocio})<br>";
    }

    public function listarProductos(): void
    {
        echo "<h2>Listado de productos del videoclub {$this->nombre}</h2>";
        echo "<p>Total de productos: {$this->numProductos}</p>";
        foreach ($this->productos as $producto) {
            $producto->muestraResumen();
        }
    }

    public function listarSocios(): void
    {
        echo "<h2>Listado de socios del videoclub {$this->nombre}</h2>";
        echo "<p>Total de socios: {$this->numSocios}</p>";
        foreach ($this->socios as $socio) {
            $socio->muestraResumen();
        }
    }

    public function alquilarSocioProducto(int $numeroCliente, int $numeroSoporte): void
    {
        $cliente = null;
        $soporte = null;

        // Buscar el cliente
        foreach ($this->socios as $socio) {
            if ($socio->getNumero() === $numeroCliente) {
                $cliente = $socio;
                break;
            }
        }

        // Buscar el soporte
        foreach ($this->productos as $producto) {
            if ($producto->getNumero() === $numeroSoporte) {
                $soporte = $producto;
                break;
            }
        }

        // Validar y realizar el alquiler
        if ($cliente === null) {
            echo "<p style='color:red;'>No se encontró el cliente con número {$numeroCliente}</p><br>";
            return;
        }

        if ($soporte === null) {
            echo "<p style='color:red;'>No se encontró el soporte con número {$numeroSoporte}</p><br>";
            return;
        }

        $cliente->alquilar($soporte);
    }
}