<?php
$preus = [
['min'=> 0, 'max'=> 5, 'preu'=> 2.00],
['min'=> 6, 'max'=> 10, 'preu'=> 1.80],
['min'=> 11, 'max'=> 20, 'preu'=> 1.50],
['min'=> 21, 'max'=> 999, 'preu'=> 1.20]
];

$quantitat = '';
$preu_kg = 0;
$import_total = 0;
$mostrar_resultat = false;

//========================= 
//PROCESSAR FORMULARI 
//========================


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Obtenir la quantitat del formulari
    

};













?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio patatas</title>
</head>
<body>
    <form>
        <h1>Comanda de Patates</h1>
        <hr>
        <label for"quantitat">Quantitat (kg):</label>
    </form>
</body>
</html>