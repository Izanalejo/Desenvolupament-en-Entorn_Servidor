<?php
class Empleado
{
    //ATRIBUTOS
    private string $nombre;
    private string $apellido;
    private int $sueldo;
    private array $telefono = [];

    //METHODS
    public function __construct($nombre, $apellido, $sueldo, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
        $this->telefono = $telefono;
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
    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono(array $Telefono){
        $this->telefono = $Telefono;
    }

    public function getNombreCompleto(){
        $nombreCompleto =$this->nombre . " " . $this->apellido . "<br>";
        return $nombreCompleto;
    }
    //Funcion para determinar si hay que pagar impuestos o no
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

    //Funcion añadir telefonos y mensaje
    public function anyadirTelefono(int $telefono): void {
        $this->telefono[] = $telefono;
    } 

    //Funcion listar los telefonos
    public function listarTelefonos(): string {
    if (empty($this->telefono)) {
        return "No hay teléfonos guardados de " . $this->nombre . "<br>";
    }
    $telefonos = implode(", ", $this->telefono);
    return $this->nombre . ": ". $telefonos . "<br>";
    }

    //Funcion eliminar los telefonos y mensaje
    public function eliminarTelefonos(): void{
        $this->telefono = [];
        echo 'Se han eliminado los telefonos de ' . $this->nombre . "<br>";
    }

}
?>