<?php
namespace TrabajadorE;

use PersonaE\Persona;

abstract class Trabajador extends Persona {
    private array $telefonos = [];
    public static float $SUELDO_TOPE = 3333;
    const EDAD_IMPUESTO = 21;

    public function __construct(string $nombre, string $apellido, int $edad, array $telefonos = []) {
        parent::__construct($nombre, $apellido, $edad);
        $this->telefonos = $telefonos;
    }

    abstract public function calcularSueldo(): float;

    abstract public function toHtml(): string;

    public function getTelefonos(): array {
        return $this->telefonos;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        if (empty($this->telefonos)) {
            return "No hay teléfonos guardados de " . $this->getNombreCompleto() . "<br>";
        }
        return $this->getNombre() . ": " . implode(", ", $this->telefonos) . "<br>";
    }

    public function eliminarTelefonos(): void {
        $this->telefonos = [];
        echo "Se han eliminado los teléfonos de " . $this->getNombreCompleto() . "<br>";
    }

    public function debePagarImpuestos(): bool {
        return $this->calcularSueldo() > self::$SUELDO_TOPE && $this->getEdad() > self::EDAD_IMPUESTO;
    }


}
?>
