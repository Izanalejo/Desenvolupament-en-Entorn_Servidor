<?php
namespace App\Modelo\Empleado314;
require_once "JSerializable.php";
use App\Modelo\Trabajador314\Trabajador;
use App\Modelo\JSerializable314\JSerializable;

class Empleado extends Trabajador implements JSerializable
{
    private int $horasTrabajadas;
    private float $precioPorHora;

    public function __construct(string $nombre, string $apellidos, int $edad, array $telefonos, int $horasTrabajadas, float $precioPorHora, float $sueldo = 1000)
    {
        parent::__construct($nombre, $apellidos, $edad, $telefonos, $sueldo);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioPorHora = $precioPorHora;
    }

    public function calcularSueldo(): float
    {
        return $this->horasTrabajadas*$this->precioPorHora;
    }

    public function __toString():string
    {
        $parent_string = parent::__toString();
        $html = <<<EMPLEADO
                {$parent_string}
                <p><strong>Salario: </strong>{$this->calcularSueldo()} €</p>
        EMPLEADO;
        return $html;
    }

    //Metodos obligados a implementar de la interface JSerializable
    public function toJSON(): string
    {
        foreach ($this as $clave => $valor) 
        {
            $mapa[$clave] = $valor;
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}
?>