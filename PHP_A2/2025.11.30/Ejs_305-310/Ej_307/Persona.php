<?php
class Persona {

    private string $nombre;
    private string $apellido;

    public function __construct(string $nombre, string $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellido;
    }
}



?>