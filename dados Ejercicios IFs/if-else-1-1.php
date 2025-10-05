<?php

/**
 * Juego: Dos dados
 * Demostración de if ... else
 */

// Tiradas de los dados
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

// Evaluar el resultado
if ($dado1 === $dado2) {
  $mensaje = "Ha sacado una pareja de $dado1";
} else {
  $mensaje = "No ha sacado pareja. El valor más alto es " . max($dado1, $dado2) . ".";
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dos dados.
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
</head>

<body>
  <h1>🎲 Juego: Dos dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <p>
    <img src="img/<?= $dado1 ?>.svg" alt="Dado <?= $dado1 ?>" width="140" height="140">
    <img src="img/<?= $dado2 ?>.svg" alt="Dado <?= $dado2 ?>" width="140" height="140">
  </p>

  <p><strong><?= $mensaje ?></strong></p>

  
  <!-- <form method="get">
    <button type="submit">🎲 Volver a tirar</button>
  </form> -->

  <footer>
    <time datetime="<?= date('c') ?>">
      <?= date('d \d\e F \d\e Y, H:i') ?>
    </time>
    <p>by DAW2</p>
  </footer>
</body>

</html>