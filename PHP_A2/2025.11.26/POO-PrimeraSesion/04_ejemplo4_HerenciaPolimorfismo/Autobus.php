<?php
    require_once('Vehiculo.php');

    class Autobus extends Vehiculo{
        private string $empresa;


        public function __construct(
            string $marca,
            string $modelo,
            string $color,
            string $propietario,
            string $empresa
        ){
            //Llamamos al constructor de la clase padre
            parent::__construct($marca, $modelo, $color, $propietario);

            $this->empresa = $empresa;
        }
            public function getEmpresa()
            {
                        return $this->empresa;
            }
            public function setEmpresa($empresa)
            {
                        $this->empresa = $empresa;
                        return $this;
            }
            //METHODS
            public function puedeAparcar(string $planta): bool{
                return $planta ==="superficie";
            }
    }


?>