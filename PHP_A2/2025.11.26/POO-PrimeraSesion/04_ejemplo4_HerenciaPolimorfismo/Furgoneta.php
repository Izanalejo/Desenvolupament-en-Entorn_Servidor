<?php
require_once('Vehiculo.php');


class Furgoneta extends Vehiculo{

    private string $altura;

    public function __construct(
        string $marca,
            string $modelo,
            string $color,
            string $propietario,
            string $empresa,
            string $altura
    ){
        parent::__construct($marca,$modelo,$color,$propietario);

        $this->altura = $altura; 
    }
}


?>