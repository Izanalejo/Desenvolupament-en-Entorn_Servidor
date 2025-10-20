<?php
$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado1c = rand(1, 6);
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);
$dado2c = rand(1, 6);

// Determinar trío
$trio1 = ($dado1a == $dado1b && $dado1a == $dado1c) ? $dado1a : 0;
$trio2 = ($dado2a == $dado2b && $dado2a == $dado2c) ? $dado2a : 0;

// Determinar pareja
if ($dado1a == $dado1b || $dado1a == $dado1c) $pareja1 = $dado1a;
elseif ($dado1b == $dado1c) $pareja1 = $dado1b;
else $pareja1 = 0;

if ($dado2a == $dado2b || $dado2a == $dado2c) $pareja2 = $dado2a;
elseif ($dado2b == $dado2c) $pareja2 = $dado2b;
else $pareja2 = 0;

// Totales
$total1 = $dado1a + $dado1b + $dado1c;
$total2 = $dado2a + $dado2b + $dado2c;

// Determinar ganador
if ($trio1 > $trio2) $resultado = "Ha ganado el jugador 1";
elseif ($trio1 < $trio2) $resultado = "Ha ganado el jugador 2";
elseif ($pareja1 > $pareja2) $resultado = "Ha ganado el jugador 1";
elseif ($pareja1 < $pareja2) $resultado = "Ha ganado el jugador 2";
elseif ($total1 > $total2) $resultado = "Ha ganado el jugador 1";
elseif ($total1 < $total2) $resultado = "Ha ganado el jugador 2";
else $resultado = "Han empatado";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Tres dados más altos - Juego</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Juego: Tres dados más altos</h1>
  <p>Actualice la página para mostrar una nueva tirada.</p>

  <table>
    <thead>
      <tr>
        <th>Jugador 1</th>
        <th>Jugador 2</th>
        <th>Resultado</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="padding:10px; background-color:red;">
          <img src="img/<?= $dado1a ?>.svg" alt="<?= $dado1a ?>" width="140" height="140">
          <img src="img/<?= $dado1b ?>.svg" alt="<?= $dado1b ?>" width="140" height="140">
          <img src="img/<?= $dado1c ?>.svg" alt="<?= $dado1c ?>" width="140" height="140">
        </td>
        <td style="padding:10px; background-color:blue;">
          <img src="img/<?= $dado2a ?>.svg" alt="<?= $dado2a ?>" width="140" height="140">
          <img src="img/<?= $dado2b ?>.svg" alt="<?= $dado2b ?>" width="140" height="140">
          <img src="img/<?= $dado2c ?>.svg" alt="<?= $dado2c ?>" width="140" height="140">
        </td>
        <td><?= $resultado ?></td>
      </tr>
    </tbody>
  </table>

    <footer>
    <time datetime="<?= date('c') ?>">
      <?= date('d \d\e F \d\e Y, H:i') ?>
    </time>
    <cite>by DAW2</cite>
  </footer>
</body>
</html>
