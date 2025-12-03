<?php
abstract class Persona {
    private string $nombre;
    private string $apellido;
    private int $edad;

    public function __construct(string $nombre, string $apellido, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
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
        public function getEdad()
        {
                return $this->edad;
        }
        public function setEdad($edad)
        {
                $this->edad = $edad;

                return $this;
        }
}




?>