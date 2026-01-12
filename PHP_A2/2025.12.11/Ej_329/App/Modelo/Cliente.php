<?php

namespace App\Modelo;

class Cliente
{
    private string $nombre;
    private int $numero;
    private array $soportesAlquilados;
    private int $numAlquileres;
    private int $maxAlquilerConcurrente;

    public function __construct(string $nombre, int $numero, int $maxAlquilerConcurrente = 3)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
        $this->soportesAlquilados = [];
        $this->numAlquileres = 0;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
    public function getNumSoportesAlquilados()
    {
        return $this->numAlquileres;
    }

    public function muestraResumen(): void
    {
        $length = count($this->soportesAlquilados);
        $html = <<< HTML
            <hr>Nombre: {$this->nombre} <br>
            Soportes alquilados: {$length} <br>
        HTML;

        echo $html;
    }

    public function alquilar(Soporte $s): bool
    {
        if ($this->tieneAlquilado($s)) {
            echo "El soporte ya está alquilado por el cliente.<br>";
            return false;
        } else if ($this->numAlquileres >= $this->maxAlquilerConcurrente) { {
                echo "<p style='color:red;'>El cliente ha alcanzado el máximo de alquileres concurrentes.</p><br>";
                return false;
            }
        }
        $this->numAlquileres++;
        $this->soportesAlquilados[] = $s;
        echo "Soporte alquilado correctamente.<br>";
        return true;
    }

    public function devolver(int $numSoporte): bool {
    if ($this->numAlquileres == 0) {
        echo "<p style='color:red;'>El cliente no tiene ningún alquiler.</p><br>";
        return false;
    }
    foreach ($this->soportesAlquilados as $key => $soporte) {
        if ($soporte->getNumero() === $numSoporte) {
            unset($this->soportesAlquilados[$key]);
            $this->soportesAlquilados = array_values($this->soportesAlquilados);
            $this->numAlquileres--;
            echo "<p style='color:green;'>Soporte devuelto correctamente.</p><br>";
            return true;
        }
    }

    echo "<p style='color:red;'>El soporte no estaba alquilado.</p><br>";
    return false;
}
    public function tieneAlquilado(Soporte $s): bool
    {
        foreach ($this->soportesAlquilados as $soporte) {
            if ($soporte === $s) {
                if ($s instanceof CintaVideo || $s instanceof Dvd || $s instanceof Juego) {
                    echo "<p style='color:green;'>El soporte es de tipo: " . get_class($s) . "</p><br>";
                    return true;
                }
            }
        }
        return false;
    }   

    public function listarAlquileres(): void{
        echo "<h3>Soportes alquilado por {$this->nombre}:</h3> ";
        foreach ($this->soportesAlquilados as $soporte) {
            echo "<ul><li>" . $soporte->titulo . "</li></ul>";
        }   
    }
}