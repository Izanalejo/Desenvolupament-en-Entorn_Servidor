<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="generate.php" method="POST" enctype="multipart/form-data">
        <label for="event_date">Nombre y apellidos:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="location">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="event_image">URL página personal:</label><br>
        <input type="text" id="url" name="url" required><br><br>

        <label for="event_image">Sexo:</label><br>
        <input type="radio" id="sexe_m" name="sexe" required>Hombre
        <input type="radio" id="sexe_f" name="sexe" required>Mujer
        <input type="radio" id="sexe_o" name="sexe" required>Otro <br><br>

        <label for="event_image">Número de convivientes en el domicilio:</label><br>
        <input type="number" id="convivents" name="convivents" required><br><br>
      

        <label for="event_image">Aficiones:</label><br>
        <input type="checkbox" id="aficions" name="aficions" required>Leer
        <input type="checkbox" id="aficions" name="aficions" required> Fútbol
        <input type="checkbox" id="aficions" name="aficions" required> Cocinar
        <input type="checkbox" id="aficions" name="aficions" required> Bailar <br><br>

        <label for="menuFav">Menú favorito:</label><br>
        <select id="menuFav" name="menuFav" required>
            <option value="">-- Selecciona una opción --</option>
            <option value="italiano">Italiano</option>
            <option value="japones">Japonés</option>
            <option value="mexicano">Mexicano</option>
            <option value="vegetariano">Vegetariano</option>
        </select><br><br>

        <p id="selectedMenu" aria-live="polite" style="font-style:italic;margin-top:0.25rem;"></p>
        <button type="submit">Generar Invitaciones</button>
    </form>
        
</body>
</html>