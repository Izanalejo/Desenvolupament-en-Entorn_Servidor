<?php
require_once('Vehiculo.php');

class Coche extends Vehiculo
{
    /**
     * Un coche puede aparcar en cualquier planta excepto la superficie
     */
    public function puedeAparcar(string $planta): bool
    {
        $plantas = $this->getPlantasDisponibles();

        return in_array($planta, $plantas, true) && $planta !== $plantas[0];
    }
}
