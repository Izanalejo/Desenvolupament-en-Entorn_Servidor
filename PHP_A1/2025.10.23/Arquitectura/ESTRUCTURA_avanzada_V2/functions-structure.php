
<?php

//------------------------------------------------------------------------------------------------------------
function myHeader()
{
    $head = <<<CABECERA
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
                
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Impresiones de Arrays</title>
    </head>
    CABECERA;
    echo $head;
}

//------------------------------------------------------------------------------------------------------------
function myMenu()
{

    $dir = "/PHP_A1/2025.10.23/Arquitectura/ESTRUCTURA_avanzada_V2/";
    $menu = <<<HERE
            <div class="menu">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{$dir}index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{$dir}ex1.php">Exercici 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{$dir}ex2.php">Exercici 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{$dir}ex3.php">Exercici 3</a>
                </li>
            </ul>
            </div>
            HERE;
    echo $menu;
    echo '<hr>';
}

//------------------------------------------------------------------------------------------------------------
function myFooter()
{
    // 1. Configurar la zona horaria antes de obtener la fecha
    date_default_timezone_set('Europe/Madrid');

    // 2. Obtener fecha y hora actuales
    $fechaActual = date("d-m-Y");
    $horaActual = date("H:i:s");

    // 3. Crear el HTML
    $footerHTML = <<<MYFOOTER
        <footer style="text-align: center; margin-top: 2em; font-family: sans-serif;">
            <hr>
            <p>&copy; Provençana</p>
            <p>La fecha es: {$fechaActual} y la hora es: {$horaActual}</p>
        </footer>
    MYFOOTER;

    // 4. Mostrar el resultado
    echo $footerHTML;
}


// Print Line. Appends an return at the end
//------------------------------------------------------------------------------------------------------------
function println($something): void
{
    echo $something . '<br>';
}
?>