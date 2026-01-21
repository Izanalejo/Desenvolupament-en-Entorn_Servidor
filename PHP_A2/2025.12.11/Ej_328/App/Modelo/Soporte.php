<?php
/* Al crear "Soporte.php" en clase abstracta aconseguim el següent: 
 * 
 * No poder crear un objecte Soporte directament (Donat que no té molt sentit crear un Soporte indivual
 * sempre haurà de ser de algun tipus DVD, Cinta, Juego...)
 * 
 * */
namespace App\Modelo;
abstract class Soporte{
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
            Precio (Con IVA): {$this->getPrecioConIVA()}  €<br><br>
        HTML;

        echo $html;

        
    }
}


?>
