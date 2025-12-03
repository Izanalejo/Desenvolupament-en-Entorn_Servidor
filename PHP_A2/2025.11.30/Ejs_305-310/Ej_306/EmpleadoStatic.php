<?php
class Empleado
{
    private string $nombre;
    private string $apellido;
    private int $sueldo;
    private array $telefono = [];

    //Variable estática compartida para todos los empleados
    private static float $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellido, float $sueldo = 1000, array $telefono = [])
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
        $this->telefono = $telefono;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellido;
    }

    public function getSueldo(): int {
        return $this->sueldo;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefono[] = $telefono;
    }

    public function listarTelefonos(): string {
        if (empty($this->telefono)) {
            return "No hay teléfonos guardados de " . $this->nombre . "<br>";
        }
        return $this->nombre . ": " . implode(", ", $this->telefono) . "<br>";
    }

    public function eliminarTelefonos(): void {
        $this->telefono = [];
        echo "Se han eliminado los teléfonos de " . $this->nombre . "<br>";
    }

    public function debePagarImpuestos(): bool {
        if ($this->sueldo > self::SUELDO_TOPE) {
            echo "Debe pagar impuestos!<br>";
            return true;
        } else {
            echo "No debe pagar impuestos!<br>";
            return false;
        }
    }

    public static function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    public static function setSueldoTope(int $valor)
    {
        return self::$sueldoTope= $valor;
    }

    public function getTelefono(): array
    {
        return $this->telefono;
    }


    public static function toHtml(Empleado $emp): string
{
    // Datos básicos
    $html = "<p>";
    $html .= "Nombre completo: " . $emp->getNombreCompleto() . "<br>";
    $html .= "Sueldo: " . $emp->getSueldo() . " €<br>";
    $html .= "</p>";

    // Lista de teléfonos
    $telefonos = $emp->getTelefono();

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

