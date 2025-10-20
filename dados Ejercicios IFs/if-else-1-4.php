<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
$dado3 = rand(1, 6);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Tres dados - Juego</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Tres dados</h1>
  <p>Actualice la página para mostrar una nueva tirada.</p>

  <p>
    <img src="img/<?= $dado1 ?>.svg" alt="<?= $dado1 ?>" width="140" height="140">
    <img src="img/<?= $dado2 ?>.svg" alt="<?= $dado2 ?>" width="140" height="140">
    <img src="img/<?= $dado3 ?>.svg" alt="<?= $dado3 ?>" width="140" height="140">
  </p>

  <?php
  if ($dado1 == $dado2 && $dado1 == $dado3) {
      echo "<p>Ha sacado un trío de $dado1.</p>";
  } elseif ($dado1 == $dado2 || $dado1 == $dado3) {
      echo "<p>Ha sacado una pareja de $dado1.</p>";
  } elseif ($dado2 == $dado3) {
      echo "<p>Ha sacado una pareja de $dado2.</p>";
  } else {
      $maximo = max($dado1, $dado2, $dado3);
      echo "<p>El valor más alto es $maximo.</p>";
  }
  ?>

  <footer>
    <time datetime="<?= date('c') ?>"><?= date('d \d\e F \d\e Y, H:i') ?></time>
    <p>by DAW2</p>
  </footer>
</body>
</html>
