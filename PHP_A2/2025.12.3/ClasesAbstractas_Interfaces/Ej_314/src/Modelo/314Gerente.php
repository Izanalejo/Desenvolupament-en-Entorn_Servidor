<?php
namespace App\Modelo\Gerente314;
require_once "JSerializable.php";

use App\Modelo\JSerializable314\JSerializable;
use App\Modelo\Trabajador314\Trabajador;

class Gerente extends Trabajador implements JSerializable
{
    private float $salario;

    public function __construct(string $nombre, string $apellidos, int $edad, array $telefonos, float $salario, float $sueldo = 5000)
    {
        parent::__construct($nombre, $apellidos, $edad, $telefonos, $sueldo);
        $this->salario = $salario;
    }

    public function calcularSueldo():float
    {
        return $this->salario*$this->getEdad()/100;
    }

    public function __toString():string
    {
        $parent_string = parent::__toString();
        $html = <<<GERENTE
                {$parent_string}
                <p><strong>Salario: </strong>{$this->calcularSueldo()} €</p>
        GERENTE;
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