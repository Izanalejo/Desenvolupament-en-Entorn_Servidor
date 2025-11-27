<?php
class Empleado
{
    //ATRIBUTOS
    private string $nombre;
    private string $apellido;
    private int $sueldo;

    //METHODS
    public function __construct($nombre, $apellido, $sueldo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
    }

    //GETTERS Y SETTERS

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre(string $nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
    public function getApepellido()
    {
        return $this->apellido;
    }
    public function setApellido(string $nuevoApellido)
    {
        $this->apellido = $nuevoApellido;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
        return $this;
    }

    public function getNombreCompleto(){
        $nombreCompleto =$this->nombre . " " . $this->apellido . "<br>";
        return $nombreCompleto;
    }
    
    public function debePagarImpuestos(): bool{
        $pagar = null;
        if($this->sueldo > 3333){
            $pagar = true;
            echo "Debe pagar impuestos!";
        }else{
            $pagar = false;
            echo "No debe pagar impuestos!";
        }
        return $pagar;
    }
}

?>