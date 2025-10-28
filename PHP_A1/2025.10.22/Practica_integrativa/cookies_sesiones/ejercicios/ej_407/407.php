<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Color de Fondo</title>
</head>
<body bgcolor="<?php
    if(isset($_POST['color'])) {
        setcookie('color_fondo', $_POST['color'], time() + 86400);
        echo $_POST['color'];
    } elseif(isset($_COOKIE['color_fondo'])) {
        echo $_COOKIE['color_fondo'];
    } else {
        echo '#FFFFFF';
    }
?>">
    <h1 style="text-align: center;">Benvingut/da!!</h1>
    <hr>
    <h1>Selecciona el color de fondo</h1>
    
    <form method="POST" action="">
        
        <label for="color">Elige un color:</label>
        <select name="color" id="color" onchange="this.form.submit()">
            <option value="">-- Selecciona --</option>
            <option value="#FFFFFF" <?php echo (isset($_COOKIE['color_fondo']) && $_COOKIE['color_fondo'] == '#FFFFFF') ? 'selected' : ''; ?>>Blanc</option>
            <option value="#FF0000" <?php echo (isset($_COOKIE['color_fondo']) && $_COOKIE['color_fondo'] == '#FF0000') ? 'selected' : ''; ?>>Vermell</option>
            <option value="#00FF00" <?php echo (isset($_COOKIE['color_fondo']) && $_COOKIE['color_fondo'] == '#00FF00') ? 'selected' : ''; ?>>Verd</option>
            <option value="#0000FF" <?php echo (isset($_COOKIE['color_fondo']) && $_COOKIE['color_fondo'] == '#0000FF') ? 'selected' : ''; ?>>Blau</option>
            <option value="#FFFF00" <?php echo (isset($_COOKIE['color_fondo']) && $_COOKIE['color_fondo'] == '#FFFF00') ? 'selected' : ''; ?>>Groc</option>
            <option value="#FFA500" <?php echo (isset($_COOKIE['color_fondo']) && $_COOKIE['color_fondo'] == '#FFA500') ? 'selected' : ''; ?>>Taronja</option>
            <option value="#800080" <?php echo (isset($_COOKIE['color_fondo']) && $_COOKIE['color_fondo'] == '#800080') ? 'selected' : ''; ?>>Lila</option>
            <option value="#FFC0CB" <?php echo (isset($_COOKIE['color_fondo']) && $_COOKIE['color_fondo'] == '#FFC0CB') ? 'selected' : ''; ?>>Rosa</option>
        </select>
    </form>
</body>
</html>