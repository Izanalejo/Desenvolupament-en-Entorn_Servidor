<?php
// generate.php

//Recibir los datos del formulario
$event_date = $_POST['event_date'];
$location = $_POST['location'];

//Marcar info de la imagen
$fileTmpPath = $_FILES['files']['tmp_name'];
$fileName = $_FILES['files']['name'];
$fileSize = $_FILES['files']['size'];
$fileType = $_FILES['files']['type'];

// Permitir tipos y peso de las imágenes
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
$maxSize = 2 * 1024 * 1024;


// Guardar imagen en la carpeta
$imagen_nombre = basename($fileName);
$file_image = "uploads/" . $imagen_nombre;

move_uploaded_file($fileTmpPath, $file_image);

$invitados = file("invitados.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


//Generar invitaciones
foreach ($invitados as $nombre) {
    $nombre = trim($nombre); // Limpiar espacios
    if (empty($nombre)) continue;
    
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
  <p>¡Esperamos contar contigo!</p><br>
  <img src="../uploads/$imagen_nombre" alt="Logo del evento" style="max-width:300px;">
</body>
</html>
HTML;
    
    $file_name = "output/invitacion_" . strtolower(str_replace(' ', '_', $nombre)) . ".html";
    file_put_contents($file_name, $html);
}

//Crear ZIP
$zip = new ZipArchive();
$zip_name = "invitaciones.zip";

if ($zip->open($zip_name, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    foreach (glob("output/*.html") as $file) {
        $zip->addFile($file, basename($file));
    }
    $zip->close();
    echo "<h3>Invitaciones generadas correctamente.</h3>";
} else {
    echo "No se pudo crear el archivo ZIP.";
}
?>