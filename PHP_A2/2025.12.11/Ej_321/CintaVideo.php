<?php
namespace App\Modelo\Ej_321;
use App\Modelo\Ej_320\Soporte;
class CintaVideo extends Soporte{
    private int $duracion;

    public function __construct(string $titulo, int $numero, float $precio, int $duracion){
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;
    }

    public function muestraResumen(): void{
        parent::muestraResumen();
        echo "Duración: {$this->duracion} minutos<br>";
    }
}

?>