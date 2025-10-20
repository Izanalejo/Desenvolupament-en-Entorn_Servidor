<?php
// generate.php

// Paso 2 – Recibir los datos del formulario
$event_date = $_POST['event_date'] ?? '';
$location = $_POST['location'] ?? '';


// Paso 3 – Leer la lista de invitados
$invitados = file("invitados.txt", FILE_IGNORE_NEW_LINES);

// Crear carpeta de salida si no existe
$output_dir = "output";
if (!is_dir($output_dir)) {
    mkdir($output_dir);
}

// Paso 4 – Generar invitaciones con interpolación
foreach ($invitados as $nombre) {
    $html = <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Invitación para $nombre</title>
</head>
<body>
  <h2>Invitación especial para $nombre</h2>
  <p>Te invitamos cordialmente a nuestro evento el día <strong>$event_date</strong>.</p>
  <p>El evento se celebrará en <strong>$location</strong>.</p>
  <p>¡Esperamos contar contigo!</p>
</body>
</html>
HTML;

    // Guardar archivo HTML individual
    $file_name = "$output_dir/invitacion_" . strtolower(str_replace(' ', '_', $nombre)) . ".html";
    file_put_contents($file_name, $html);
}

// Paso 5 – Crear y empaquetar en ZIP
$zip = new ZipArchive();
$zip_name = "invitaciones.zip";

if ($zip->open($zip_name, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    foreach (glob("$output_dir/*.html") as $file) {
        $zip->addFile($file, basename($file));
    }
    $zip->close();
    echo "<h3>Invitaciones generadas correctamente.</h3>";
    echo "<a href='$zip_name' download>Descargar archivo ZIP</a>";
} else {
    echo "No se pudo crear el archivo ZIP.";
}
?>
