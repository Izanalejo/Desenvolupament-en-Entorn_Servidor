<?php
session_start();

if(isset($_GET['accion']) && $_GET['accion'] == 'vaciar') {
    session_destroy();
    header('Location: 408fondoSesion1.php');
    exit();
}

$color_actual = isset($_SESSION['color_fondo']) ? $_SESSION['color_fondo'] : '#FFFFFF';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Sesión</title>
</head>
<body bgcolor="<?php echo $color_actual; ?>">
    <h1>Información del color de fondo</h1>
    
    <p><strong>Color actual:</strong> <?php echo $color_actual; ?></p>
    
    <?php if(isset($_SESSION['color_fondo'])): ?>
        <p>El color está almacenado en la sesión.</p>
    <?php else: ?>
        <p>No hay color guardado en la sesión (usando blanco por defecto).</p>
    <?php endif; ?>
    
    <br>
    <p><a href="408.php">← Volver a la página anterior</a></p>
    <p><a href="408.php">🗑️ Vaciar sesión y volver</a></p>
</body>
</html>