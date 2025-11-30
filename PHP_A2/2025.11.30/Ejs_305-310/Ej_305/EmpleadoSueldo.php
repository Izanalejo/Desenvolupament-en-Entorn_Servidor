<?php
class Empleado
{
    private string $nombre;
    private string $apellido;
    private int $sueldo;
    private array $telefono = [];

    //Variable estática compartida para todos los empleados
    private static int $sueldoTope = 3333;

    public function __construct(string $nombre, string $apellido, int $sueldo = 1000, array $telefono = [])
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

    /**
     * Get the value of sueldoTope
     */ 
    public static function getSueldoTope()
    {
        return self::$sueldoTope;
    }

    /**
     * Set the value of sueldoTope
     *
     * @return  self
     */ 
    public static function setSueldoTope(int $valor)
    {
        return self::$sueldoTope= $valor;
    }

} 



?>   

