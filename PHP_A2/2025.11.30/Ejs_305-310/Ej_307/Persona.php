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

        public function getNombre()
        {
                return $this->nombre;
        }

     
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getApellido()
        {
                return $this->apellido;
        }

        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }
}



?>