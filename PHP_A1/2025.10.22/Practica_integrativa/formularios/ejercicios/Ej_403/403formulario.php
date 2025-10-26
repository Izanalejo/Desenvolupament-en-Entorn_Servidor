<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con validación</title>
</head>
<body>
<?php
// --- FUNCIONES Y VARIABLES ---
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h1>Formulario</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
    <label>Nombre y apellidos:</label><br>
    <input type="text" name="name" required pattern="[A-Za-zÀ-ÿ\s]+" title="Solo letras y espacios"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>URL página personal:</label><br>
    <input type="url" name="url" required><br><br>

    <label>Sexo:</label><br>
    <input type="radio" name="gender" value="Hombre" required> Hombre
    <input type="radio" name="gender" value="Mujer"> Mujer
    <input type="radio" name="gender" value="Otro"> Otro<br><br>

    <label>Número de convivientes:</label><br>
    <input type="number" name="numConv" min="1" max="20" required><br><br>

    <label>Aficiones:</label><br>
    <input type="checkbox" name="aficions[]" value="Leer"> Leer
    <input type="checkbox" name="aficions[]" value="Fútbol"> Fútbol
    <input type="checkbox" name="aficions[]" value="Cocinar"> Cocinar
    <input type="checkbox" name="aficions[]" value="Bailar"> Bailar<br><br>

    <label>Menú favorito:</label><br>
    <select name="menuFav" required>
        <option value="">-- Selecciona una opción --</option>
        <option value="italiano">Italiano</option>
        <option value="japones">Japonés</option>
        <option value="mexicano">Mexicano</option>
        <option value="vegetariano">Vegetariano</option>
    </select><br><br>

    <button type="submit">Enviar</button>
</form>
</body>
</html>

<?php


$errores = [];
$datos = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación del nombre
    $name = test_input($_POST["name"]);
    if (empty($name)) {
        $errores[] = "El nombre es obligatorio.";
    } elseif (!preg_match("/^[a-zA-ZÀ-ÿ\s]+$/u", $name)) {
        $errores[] = "El nombre solo puede contener letras y espacios.";
    }
    $datos["name"] = $name;

    // Email
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email no es válido.";
    }
    $datos["email"] = $email;

    // URL
    $url = test_input($_POST["url"]);
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $errores[] = "La URL no es válida.";
    }
    $datos["url"] = $url;

    // Número de convivientes
    $numConv = $_POST["numConv"];
    if (!filter_var($numConv, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 20]])) {
        $errores[] = "El número de convivientes debe ser un entero entre 1 y 20.";
    }
    $datos["numConv"] = $numConv;

    // Género
    $gender = $_POST["gender"] ?? "";
    $generos_validos = ["Hombre", "Mujer", "Otro"];
    if (!in_array($gender, $generos_validos)) {
        $errores[] = "Selecciona un género válido.";
    }
    $datos["gender"] = $gender;

    // Aficiones
    $aficions = $_POST["aficions"] ?? [];
    $aficions_validas = ["Leer", "Fútbol", "Cocinar", "Bailar"];
    foreach ($aficions as $a) {
        if (!in_array($a, $aficions_validas)) {
            $errores[] = "Una o más aficiones no son válidas.";
            break;
        }
    }
    $datos["aficions"] = $aficions;

    // Menú favorito
    $menuFav = $_POST["menuFav"];
    $menus_validos = ["italiano", "japones", "mexicano", "vegetariano"];
    if (!in_array($menuFav, $menus_validos)) {
        $errores[] = "Selecciona un menú válido.";
    }
    $datos["menuFav"] = $menuFav;

    // Mostrar resultado
    if (empty($errores)) {
        echo "<h2>Datos válidos recibidos:</h2>";
        echo "Nombre: " . $datos["name"] . "<br>";
        echo "Email: " . $datos["email"] . "<br>";
        echo "URL: " . $datos["url"] . "<br>";
        echo "Convivientes: " . $datos["numConv"] . "<br>";
        echo "Género: " . $datos["gender"] . "<br>";
        echo "Aficiones: " . implode(", ", $datos["aficions"]) . "<br>";
        echo "Menú favorito: " . ucfirst($datos["menuFav"]) . "<br>";
    } else {
        echo "<h3>Errores encontrados:</h3><ul>";
        foreach ($errores as $err) {
            echo "<li>$err</li>";
        }
        echo "</ul>";
    }
}


?>
