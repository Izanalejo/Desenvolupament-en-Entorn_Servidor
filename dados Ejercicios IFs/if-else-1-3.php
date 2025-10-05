<?php
/**
 * Juego: Dos dados más altos.
 * if .. elseif ... else ... (1). Sin formularios, sin funciones ni arrays.
 */

// Tiradas de los dados
$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);

// Verificar parejas
if ($dado1a == $dado1b) {
    $pareja1 = $dado1a;
} else {
    $pareja1 = 0;
}

if ($dado2a == $dado2b) {
    $pareja2 = $dado2a;
} else {
    $pareja2 = 0;
}

// Calcular totales
$total1 = $dado1a + $dado1b;
$total2 = $dado2a + $dado2b;

// Determinar ganador
if ($pareja1 > $pareja2) {
    $resultado = "Ha ganado el jugador 1";
} elseif ($pareja1 < $pareja2) {
    $resultado = "Ha ganado el jugador 2";
} else {
    if ($total1 > $total2) {
        $resultado = "Ha ganado el jugador 1";
    } elseif ($total1 < $total2) {
        $resultado = "Ha ganado el jugador 2";
    } else {
        $resultado = "Han empatado";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Dos dados más altos - Juego</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css" title="Color">
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
        <td style="padding: 10px; background-color: red;">
          <img src="img/<?= $dado1a ?>.svg" alt="<?= $dado1a ?>" width="140" height="140">
          <img src="img/<?= $dado1b ?>.svg" alt="<?= $dado1b ?>" width="140" height="140">
        </td>
        <td style="padding: 10px; background-color: blue;">
          <img src="img/<?= $dado2a ?>.svg" alt="<?= $dado2a ?>" width="140" height="140">
          <img src="img/<?= $dado2b ?>.svg" alt="<?= $dado2b ?>" width="140" height="140">
        </td>
        <td><?= $resultado ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>
