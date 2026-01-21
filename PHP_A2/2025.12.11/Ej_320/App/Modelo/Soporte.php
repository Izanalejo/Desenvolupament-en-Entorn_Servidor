<?php
namespace App\Modelo\Ej_320;
class Soporte{
    public string $titulo;
    protected int $numero;
    private float $precio;


    private const IVA = 0.21;

    public function __construct(string $titulo, int $numero, float $precio){
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }
    public function getPrecio(): float{
        return $this->precio;
    }
    public function getNumero(): int {
        return $this->numero;
    }
    public function getPrecioConIVA(): float{
        return $this->precio * (1 + self::IVA);
    }
    public function muestraResumen(): void{
        $html = <<< HTML
            <hr>Título: {$this->titulo} {$this->numero} <br>
            Precio (Sin IVA): {$this->precio}  €<br>
            Precio (Con IVA): {$this->getPrecioConIVA()}  €<br>
        HTML;

        echo $html;

        
    }
}


?>
