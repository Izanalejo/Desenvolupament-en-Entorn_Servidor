
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
</head>
<body>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $email = $gender = $numConv = $url = $menuFav = $aficions= "";


  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $url = test_input($_POST["url"]);
  $numConv = test_input($_POST["numConv"]);
  $gender = test_input($_POST["gender"]);
  $menuFav = test_input($_POST["menuFav"]);
  $aficions = $_POST["aficions"] ?? [];
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
    <h1>Formulario</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
        <label for="event_date">Nombre y apellidos:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="location">Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="event_image">URL página personal:</label><br>
        <input type="text" id="url" name="url" required><br><br>

        Sexo: <br>
        <input type="radio" id="sexe_m" name="gender" value="Hombre">Hombre
        <input type="radio" id="sexe_f" name="gender" value="Mujer">Mujer
        <input type="radio" id="sexe_o" name="gender" value="Otro">Otro <br><br>

        <label for="event_image">Número de convivientes en el domicilio:</label><br>
        <input type="number" id="convivents" name="numConv" required><br><br>

        <label for="event_image">Aficiones:</label><br>
        <input type="checkbox" id="aficions" name="aficions[]" value="Leer">Leer
        <input type="checkbox" id="aficions" name="aficions[]" value="Fútbol"> Fútbol
        <input type="checkbox" id="aficions" name="aficions[]" value="Cocinar"> Cocinar
        <input type="checkbox" id="aficions" name="aficions[]" value="Bailar"> Bailar <br><br>

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
        
    <?php
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $url;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $numConv;
        echo "<br>";
        echo implode(", ", $aficions);
        echo "<br>";
        echo $menuFav;
?>
</body>
</html>