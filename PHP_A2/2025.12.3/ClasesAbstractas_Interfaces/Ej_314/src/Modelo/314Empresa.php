<?php
namespace App\Modelo\Empresa314;
use App\Modelo\Trabajador314\Trabajador;

class Empresa
{
    private string $nombre;
    private string $direccion;
    private array $trabajadores;

    public function __construct(string $nombre, string $direccion)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->trabajadores = [];
    }

    //GETTERS
    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    //SETTERS
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setDireccion(string $direccion): void
    {
        $this->direccion = $direccion;
    }

    public function añadirTrabajador(Trabajador $t)
    {
        array_push($this->trabajadores, $t);
    }

    public function listarTrabajadoresHtml(): string
    {
        $html = "";
        foreach ($this->trabajadores as $trabajador) 
        {
            $html .= Trabajador::toHtml($trabajador);
        }
        return $html;
    }

    public function getCosteNominas(): float
    {
        $total = 0;
        foreach ($this->trabajadores as $trabajador) 
        {
            $total += $trabajador->calcularSueldo();
        }
        return $total;
    }
}