<?php
class Coche{
    //Atributos
    private string $marca;
    private string $modelo;
    private string $color;
    private string $propietario;

    //METHODS

    public function __construct(
        string $marca,
        string $modelo,
        string $color,
        string $propietario
    )
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->propietario = $propietario;
    }

    //GETTERS Y SETTERS
    public function getMarca():string {
        return $this->marca;
    }
    public function getModelo():string {
        return $this->modelo;
    }
    public function getColor():string {
        return $this->color;
    }
    public function getPropietario():string {
        return $this->propietario;
    }

    public function setMarca(string $nuevaMarca): void {
        $this->marca = $nuevaMarca;
    }
    public function setModelo(string $nuevoModelo): void {
        $this->modelo = $nuevoModelo;
    }
    public function setColor(string $nuevoColor): void {
        $this->color = $nuevoColor;
    }
    public function setPropietario(string $nuevoPropietario): void {
        $this->propietario = $nuevoPropietario;
    }

}

    ///////////////////////////////////////////////

    $coche1 = new Coche("Seat", "Leon", "rojo", "Izan");
    echo "{$coche1->getPropietario()} se ha comprado un {$coche1->getMarca()} {$coche1->getModelo()} de color {$coche1->getColor()}";

?>