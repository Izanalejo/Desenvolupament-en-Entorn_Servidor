<?php
namespace TrabajadorE;

require_once("Trabajador.php");

class Empleado extends Trabajador {
    private int $horasTrabajadas;
    private float $precioHora;

    public function __construct(string $nombre, string $apellido, int $edad, int $horasTrabajadas, float $precioHora, array $telefonos = []) {
        parent::__construct($nombre, $apellido, $edad, $telefonos);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioHora = $precioHora;
    }

    public function calcularSueldo(): float {
        return $this->horasTrabajadas * $this->precioHora;
    }

    public function toHtml(): string {
        $html = "<h3>Empleado: " . $this->getNombreCompleto() . "</h3>";
        $html .= "<p>Sueldo: " . $this->calcularSueldo() . " €</p>";
        $html .= "<p>Horas trabajadas: " . $this->horasTrabajadas . "</p>";
        $html .= "<p>Precio por hora: " . $this->precioHora . " €</p>";

        if (!empty($this->getTelefonos())) {
            $html .= "<p>Teléfonos:</p><ul>";
            foreach ($this->getTelefonos() as $t) {
                $html .= "<li>$t</li>";
            }
            $html .= "</ul>";
        } else {
            $html .= "<p>No tiene teléfonos guardados.</p>";
        }

        return $html;
    }
}
?>
