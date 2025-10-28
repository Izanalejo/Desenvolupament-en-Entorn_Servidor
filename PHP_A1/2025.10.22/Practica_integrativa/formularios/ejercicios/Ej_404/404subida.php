<?php
// Comprobamos si se ha enviado el formulario correctamente
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Verificamos si el archivo existe
    if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {

        // Datos del archivo
        $nombreArchivo = $_FILES["archivo"]["name"];
        $rutaTemporal = $_FILES["archivo"]["tmp_name"];
        $rutaDestino = "uploads/" . basename($nombreArchivo);

        // Creamos la carpeta si no existe
        if (!file_exists("uploads")) {
            mkdir("uploads", 0777, true);
        }

        // Movemos el archivo a la carpeta destino
        if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
            echo "<h3>Archivo subido correctamente.</h3>";
            echo "Nombre: " . htmlspecialchars($nombreArchivo) . "<br>";
            echo "Ruta: " . htmlspecialchars($rutaDestino) . "<br>";
        } else {
            echo "<p style='color:red;'>Error al mover el archivo.</p>";
        }
    } else {
        echo "<p style='color:red;'>No se ha subido ningún archivo válido.</p>";
    }

    // Verificamos los valores numéricos
    if (isset($_POST["anchura"], $_POST["altura"])) {
        $anchura = (int)$_POST["anchura"];
        $altura = (int)$_POST["altura"];

        echo "<h3>Datos recibidos:</h3>";
        echo "Anchura: $anchura px<br>";
        echo "Altura: $altura px<br>";
    } else {
        echo "<p style='color:red;'>No se han recibido los datos de anchura o altura.</p>";
    }

} else {
    echo "<p style='color:red;'>Acceso incorrecto. Usa el formulario para enviar datos.</p>";
}
?>
