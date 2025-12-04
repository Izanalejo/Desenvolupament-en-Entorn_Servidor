<?php
class Persona {

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
    public function getEdad()
        {
                return $this->edad;
        }

        public function setEdad($edad)
        {
                $this->edad = $edad;

                return $this;
        }

    // MÉTODO ESTÁTICO NUEVO
    public static function toHtml(Persona $p): string {
        return "<p>Nombre completo: " . $p->getNombreCompleto() . "</p>";
    }
}
?>
