<?php
class Empleado extends Persona
{
    private int $sueldo;
    private array $telefono = [];



    public function __construct(string $nombre, string $apellido, int $sueldo= 1000, array $telefono = [])
    {
        parent::__construct($nombre, $apellido);
        $this->sueldo = $sueldo;
        $this->telefono = $telefono;
    }

    public function getSueldo(): int {
        return $this->sueldo;
    }

    public function getTelefono(): array {
        return $this->telefono;
    }

    // MÉTODO ESTÁTICO REQUERIDO
    public static function toHtml(Persona $p): string {

        $html = "<p>Nombre completo: " . $p->getNombreCompleto() . "</p>";

        if ($p instanceof Empleado) {

            $html .= "<p>Sueldo: " . $p->getSueldo() . "€</p>";

            $tels = $p->getTelefono();

            if (!empty($tels)) {
                $html .= "<ol>";
                foreach ($tels as $t) {
                    $html .= "<li>$t</li>";
                }
                $html .= "</ol>";
            } else {
                $html .= "<p>No tiene teléfonos.</p>";
            }
        }

        return $html;
    }
}
?>
