<?php
namespace App\Modelo;
use App\Modelo\Soporte;
class Dvd extends Soporte{
    
    private int $duracion;
    private string $idioma;
    private string $formatoPantalla;

    public function __construct(string $titulo, int $numero, float $precio, string $idioma, string $formatoPantalla){
        parent::__construct($titulo, $numero, $precio);
        $this->idioma = $idioma;
        $this->formatoPantalla = $formatoPantalla;
    }
    

    public function getIdioma()
    {
        return $this->idioma;
    }

    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    public function getFormatoPantalla()
    {
        return $this->formatoPantalla;
    }
    public function setFormatoPantalla($formatoPantalla)
    {
        $this->formatoPantalla = $formatoPantalla;

        return $this;
    }
    
    public function muestraResumen(): void{
        parent::muestraResumen();
        $html = <<< HTML
            Idioma: {$this->idioma} <br>
            Formato de pantalla: {$this->formatoPantalla} <br>
        HTML;
        echo $html;
    }
}





?>