<?php
class Gerente extends Trabajador
{
    private float $salarioBase;

    public function __construct(
        string $nombre, 
        string $apellido, 
        int $edad, 
        float $salarioBase = 2000.0,
        array $telefonos = []
    ) {
        parent::__construct($nombre, $apellido, $edad, $telefonos);
        $this->salarioBase = $salarioBase;
    }

    // Implementación del método abstracto
    // Sueldo = salario + salario * edad / 100
    public function calcularSueldo(): float
    {
        return $this->salarioBase + ($this->salarioBase * $this->getEdad() / 100);
    }

    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }
}
?>