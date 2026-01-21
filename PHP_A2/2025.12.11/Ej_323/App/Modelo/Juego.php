<?php

namespace App\Modelo;

use App\Modelo\Soporte;

class Juego extends Soporte{
    private string $consola;
    private int $minNumJugadores;
    private int $maxNumJugadores;

    public function __construct(string $titulo, int $numero, float $precio, string $consola, int $minNumJugadores, int $maxNumJugadores)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }
    public function getConsola()
    {
        return $this->consola;
    }
    public function setConsola($consola)
    {
        $this->consola = $consola;

        return $this;
    }
    public function getMinNumJugadores()
    {
        return $this->minNumJugadores;
    }
    public function setMinNumJugadores($minNumJugadores)
    {
        $this->minNumJugadores = $minNumJugadores;

        return $this;
    }
    public function getMaxNumJugadores()
    {
        return $this->maxNumJugadores;
    }
    public function setMaxNumJugadores($maxNumJugadores)
    {
        $this->maxNumJugadores = $maxNumJugadores;

        return $this;
    }
    public function muestraJugadoresPosibles(): string{
        if($this->minNumJugadores === $this->maxNumJugadores){
            return "Número de jugadores: {$this->minNumJugadores}<br><br>";
        } else {
            return "Número de jugadores: de {$this->minNumJugadores} a {$this->maxNumJugadores}<br><br>";
        }
    }

    public function muestraResumen(): void{
        parent::muestraResumen();
        $html = <<< HTML
            Consola: {$this->consola} <br>
            Número mínimo de jugadores: {$this->minNumJugadores} <br>
            Número máximo de jugadores: {$this->maxNumJugadores} <br>
        HTML;
        echo $html;
    }
}
