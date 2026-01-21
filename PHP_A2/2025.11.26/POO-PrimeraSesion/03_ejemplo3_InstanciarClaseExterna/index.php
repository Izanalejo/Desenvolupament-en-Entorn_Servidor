<?php
    require("Coche.php");

    //Titulo
    echo "Ejemplo 3: Instanciar una clase externa <br><br>";

    //Instancio y configuro los coches 

    $coche1 = new Coche("Seat", "Leon", "rojo", "Izan");
    echo "{$coche1->getPropietario()} se ha comprado un {$coche1->getMarca()} {$coche1->getModelo()} de color {$coche1->getColor()} <br>";

    $coche2 = new Coche("Citröen", "C3", "Amarillo", "Pepito");
    echo "{$coche2->getPropietario()} se ha comprado un {$coche2->getMarca()} {$coche2->getModelo()} de color {$coche2->getColor()}";



?>