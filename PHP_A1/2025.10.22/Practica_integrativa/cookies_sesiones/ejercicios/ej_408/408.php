<?php
session_start();

if(isset($_POST['color'])) {
    $_SESSION['color_fondo'] = $_POST['color'];
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
    <title>Selector de Color - Sesión</title>
</head>
<body bgcolor="<?php echo $color_actual; ?>">
    <h1>Selecciona el color de fondo</h1>
    
    <form method="POST" action="">
        <label for="color">Elige un color:</label>
        <select name="color" id="color" onchange="this.form.submit()">
            <option value="">-- Selecciona --</option>
            <option value="#FFFFFF" <?php echo ($color_actual == '#FFFFFF') ? 'selected' : ''; ?>>Blanco</option>
            <option value="#FF0000" <?php echo ($color_actual == '#FF0000') ? 'selected' : ''; ?>>Rojo</option>
            <option value="#00FF00" <?php echo ($color_actual == '#00FF00') ? 'selected' : ''; ?>>Verde</option>
            <option value="#0000FF" <?php echo ($color_actual == '#0000FF') ? 'selected' : ''; ?>>Azul</option>
            <option value="#FFFF00" <?php echo ($color_actual == '#FFFF00') ? 'selected' : ''; ?>>Amarillo</option>
            <option value="#FFA500" <?php echo ($color_actual == '#FFA500') ? 'selected' : ''; ?>>Naranja</option>
            <option value="#800080" <?php echo ($color_actual == '#800080') ? 'selected' : ''; ?>>Morado</option>
            <option value="#FFC0CB" <?php echo ($color_actual == '#FFC0CB') ? 'selected' : ''; ?>>Rosa</option>
        </select>
    </form>
    
    <br>
    <p><a href="408.2.php">Ir a la página 2</a></p>
</body>
</html>