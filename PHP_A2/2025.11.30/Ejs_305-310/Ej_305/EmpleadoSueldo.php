<?php
class Empleado extends Trabajador
{
    private int $horasTrabajadas;
    private float $precioPorHora;
    
    private static int $sueldoTope = 3333;
    private const EDAD_IMPUESTOS = 21;

    public function __construct(
        string $nombre, 
        string $apellido, 
        int $edad, 
        int $horasTrabajadas = 0, 
        float $precioPorHora = 10.0,
        array $telefonos = []
    ) {
        parent::__construct($nombre, $apellido, $edad, $telefonos);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioPorHora = $precioPorHora;
    }

    // Implementación del método abstracto
    public function calcularSueldo(): float
    {
        return $this->horasTrabajadas * $this->precioPorHora;
    }

    public static function getSueldoTope(): int
    {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $valor): void
    {
        self::$sueldoTope = $valor;
    }

    public function debePagarImpuestos(): bool
    {
        return $this->calcularSueldo() > self::$sueldoTope && $this->getEdad() > self::EDAD_IMPUESTOS;
    }
}
?>