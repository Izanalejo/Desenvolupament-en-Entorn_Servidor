<?php
namespace App\Modelo\Trabajador314;
use App\Modelo\Persona314\Persona;

abstract class Trabajador extends Persona
{
    protected array $telefonos = [];
    public static float $sueldoTope = 3333;
    private float $sueldo;
    public const EDAD_IMPUESTOS = 21;

    public function __construct(string $nombre, string $apellidos, int $edad, array $telefonos, float $sueldo){
        parent::__construct($nombre, $apellidos, $edad);
        $this->telefonos = $telefonos;
        $this->sueldo = $sueldo;
    }

    //GETTERS
    public function getSueldoTope(): float
    {
        return $this->sueldoTope;
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    //SETTERS
    public function setSueldoTope(float $newSueldoTope): void
    {
        $this->sueldoTope = $newSueldoTope;
    }

    public abstract function calcularSueldo():float;

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > self::$sueldoTope && $this->getEdad() > self::EDAD_IMPUESTOS;
    }   

        public function anyadirTelefono(int $telefono): void
    {
        array_push($this->telefonos, $telefono);
    }

    public function listarTelefonos(): string
    {
        if(empty($this->telefonos))
        {
            return "No hay telefonos en el array";
        }
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }

    public function __toString():string
    {
        $html = <<<GERENTE
                <h2>{$this->getNombreCompleto()}</h2>
                <p><strong>Edad: </strong>{$this->getEdad()} años</p>
                <p><strong>Telefonos: </strong>{$this->listarTelefonos()}</p>
        GERENTE;
        return $html;
    }

    public static function toHtml(Persona $p): string 
    {
        if ($p instanceof Trabajador) 
        {
            $emp_telefonos = "";
            foreach ($p->getTelefonos() as $telefono) {
            $emp_telefonos .= "<li>{$telefono}</li>";
        }
        return "<p>Nombre: {$p->getNombrecompleto()} <strong>Telefonos:</strong><ol>  {$emp_telefonos} </ol>";
        }
        return "{$p->getNombrecompleto()} no es un empleado";
    }
}