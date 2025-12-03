<?php
abstract class Empleado extends Persona
{
    private int $sueldo;
    private array $telefono = [];

    //Variable estática compartida para todos los empleados
    private static int $sueldoTope = 3333;

    private const  EDAD_IMPUESTOS = 21;

    public function __construct(string $nombre, string $apellido, int $edad,  int $sueldo = 1000, array $telefono = [])
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->sueldo = $sueldo;
        $this->telefono = $telefono;
    }
    //GETTERS Y SETTERS
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
    public function getSueldo(): int {
        return $this->sueldo;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefono[] = $telefono;
    }

    public function listarTelefonos(): string {
        if (empty($this->telefono)) {
            return "No hay teléfonos guardados de " . $this->getNombreCompleto() . "<br>";
        }
        return $this->getNombre() . ": " . implode(", ", $this->telefono) . "<br>";
    }

    public function eliminarTelefonos(): void {
        $this->telefono = [];
        echo "Se han eliminado los teléfonos de " . $this->getNombreCompleto() . "<br>";
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > self::$sueldoTope && $this->getEdad() > self::EDAD_IMPUESTOS;
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

