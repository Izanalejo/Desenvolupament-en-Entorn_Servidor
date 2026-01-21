<?php
namespace App\Modelo;
class Cliente{
    private string $nombre;
    private int $numero;
    private array $numSoportesAlquilados;
    private int $maxAlquilerConcurrente;
    public function __construct(string $nombre, int $numero, int $maxAlquilerConcurrente = 3){
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
        $this->numSoportesAlquilados = [];
    }
    public function getNumero()
    {
        return $this->numero;
    } 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
     public function getNumSoportesAlquilados()
     {
        return $this->numSoportesAlquilados;
     }

    public function muestraResumen(): void{
        $length = count($this->numSoportesAlquilados);
        $html = <<< HTML
            <hr>Nombre: {$this->nombre} <br>
            Soportes alquilados: {$length} <br>
        HTML;

        echo $html;
}

}

?>