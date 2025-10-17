<?php
function invitacion($invitados, $event_date, $location)
{
    foreach ($invitados as $friend) 
    {
    $invitacion = render_template('./invitacion.template.php',
    [
    'friend' => $friend,
    'my_name' => 'Izan Alejo',
    'event_date' => $event_date,
    'location' => $location
    ]);

    file_put_contents("output/{$friend}.html", $invitacion);
    }
}

function invitacionToZip($invitados)
{
    $zip = new ZipArchive();
    $zip->open('invitaciones.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
    foreach ($invitados as $name) {
    $zip->addFile("output/{$name}.html", "{$name}.html");
    }
    $zip->close();
}

function main():void
{
$invitados = file('invitados.txt', FILE_IGNORE_NEW_LINES);
$event_date = "20 de Octubre de 2025";
$location = "Centro Cultural XYZ";
require_once(__DIR__ . '/utils.php');

invitacion($invitados, $event_date, $location);
invitacionToZip($invitados);
echo "Invitaciones creadas correctamente";
}

main();
?>