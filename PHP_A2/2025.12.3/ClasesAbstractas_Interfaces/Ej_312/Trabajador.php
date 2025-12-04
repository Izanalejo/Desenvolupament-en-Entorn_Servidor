<?php
abstract class Trabajador extends Persona
{
    private array $telefonos = [];

    public function __construct(string $nombre, string $apellido, int $edad, array $telefonos = [])
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->telefonos = $telefonos;
    }

    // Método abstracto que cada clase hija debe implementar
    abstract public function calcularSueldo(): float;

    // Métodos para gestionar teléfonos
    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string
    {
        if (empty($this->telefonos)) {
            return "No hay teléfonos guardados de " . $this->getNombreCompleto() . "<br>";
        }
        return $this->getNombre() . ": " . implode(", ", $this->telefonos) . "<br>";
    }

    public function eliminarTelefonos(): void
    {
        $this->telefonos = [];
        echo "Se han eliminado los teléfonos de " . $this->getNombreCompleto() . "<br>";
    }

    public static function toHtml(Trabajador $trabajador): string
    {
        $html = "<p>";
        $html .= "Nombre completo: " . $trabajador->getNombreCompleto() . "<br>";
        $html .= "Sueldo: " . $trabajador->calcularSueldo() . " €<br>";
        $html .= "</p>";

        $telefonos = $trabajador->getTelefonos();

        if (!empty($telefonos)) {
            $html .= "<ol>";
            foreach ($telefonos as $t) {
                $html .= "<li>$t</li>";
            }
            $html .= "</ol>";
        } else {
            $html .= "<p>No tiene teléfonos guardados.</p>";
        }
        
        return $html;
    }
}
?>