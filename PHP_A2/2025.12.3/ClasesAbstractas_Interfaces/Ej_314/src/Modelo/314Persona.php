<?php
namespace App\Modelo\Persona314;

abstract class Persona
{
    protected string $nombre;
    protected string $apellidos;
    protected int $edad;

    public function __construct(string $nombre, string $apellidos, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    //GETTERS
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    //SETTERS
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }
    
    //Metodos
    public function getNombreCompleto():string
    {
        return $this->nombre." ".$this->apellidos;
    }

    abstract public static function toHtml(Persona $p):string;

}