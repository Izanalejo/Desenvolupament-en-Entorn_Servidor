<?php
namespace TrabajadorE;

require_once("Trabajador.php");

class Gerente extends Trabajador {
    private float $salarioBase;

    public function __construct(string $nombre, string $apellido, int $edad, float $salarioBase, array $telefonos = []) {
        parent::__construct($nombre, $apellido, $edad, $telefonos);
        $this->salarioBase = $salarioBase;
    }
    public function calcularSueldo(): float {
        return $this->salarioBase;
    }
    public function toHtml(): string {
        $html = "<h3>Gerente: " . $this->getNombreCompleto() . "</h3>";

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
