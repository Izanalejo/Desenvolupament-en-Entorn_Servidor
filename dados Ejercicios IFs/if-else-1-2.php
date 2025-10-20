<?php
/**
 * Juego: Dos dados (mejorado con estilos)
 */

// Tiradas de los dados
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

// Evaluar el resultado
if ($dado1 === $dado2) {
  $mensaje = "Ha sacado una pareja de $dado1";
  $clase = "grande";
} else {
  $mensaje = "No ha sacado pareja. El valor más alto es " . max($dado1, $dado2) . ".";
  $clase = "";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Juego: Dos dados</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>🎲 Juego: Dos dados</h1>
  <p>Actualice la página o pulse el botón para una nueva tirada.</p>

  <fieldset>
    <legend>Tirada actual</legend>
    <p>
      <img src="img/<?= $dado1 ?>.svg" alt="Dado <?= $dado1 ?>" width="140" height="140">
      <img src="img/<?= $dado2 ?>.svg" alt="Dado <?= $dado2 ?>" width="140" height="140">
    </p>
    <p class="<?= $clase ?>"><?= $mensaje ?></p>
    <form method="get">
      <input type="submit" value="🎲 Volver a tirar">
    </form>
  </fieldset>

  <footer>
    <time datetime="<?= date('c') ?>">
      <?= date('d \d\e F \d\e Y, H:i') ?>
    </time>
    <cite>by DAW2</cite>
  </footer>
</body>
</html>
