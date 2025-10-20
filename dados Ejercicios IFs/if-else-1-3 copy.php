<?php
/* Cambios clave:

Uso de operador ternario para asignar las parejas.
Eliminadas llaves en los if cuando no hay bloques grandes, haciendo el código más compacto.
HTML limpio y consistente con thead y tbody. */

$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);

$pareja1 = ($dado1a == $dado1b) ? $dado1a : 0;
$pareja2 = ($dado2a == $dado2b) ? $dado2a : 0;

$total1 = $dado1a + $dado1b;
$total2 = $dado2a + $dado2b;

if ($pareja1 > $pareja2) $resultado = "Ha ganado el jugador 1";
elseif ($pareja1 < $pareja2) $resultado = "Ha ganado el jugador 2";
elseif ($total1 > $total2) $resultado = "Ha ganado el jugador 1";
elseif ($total1 < $total2) $resultado = "Ha ganado el jugador 2";
else $resultado = "Han empatado";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Dos dados más altos - Juego</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Juego: Dos dados más altos</h1>
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
        <td style="padding:10px;background-color:red;">
          <img src="img/<?= $dado1a ?>.svg" alt="<?= $dado1a ?>" width="140" height="140">
          <img src="img/<?= $dado1b ?>.svg" alt="<?= $dado1b ?>" width="140" height="140">
        </td>
        <td style="padding:10px;background-color:blue;">
          <img src="img/<?= $dado2a ?>.svg" alt="<?= $dado2a ?>" width="140" height="140">
          <img src="img/<?= $dado2b ?>.svg" alt="<?= $dado2b ?>" width="140" height="140">
        </td>
        <td><?= $resultado ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>
