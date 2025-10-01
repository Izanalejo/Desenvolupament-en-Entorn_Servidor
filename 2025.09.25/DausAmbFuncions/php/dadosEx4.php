<?php
// Función para tirar un dado
function tirarDado(): int {
    return rand(1, 6);
}

// Función que devuelve los mensajes
function obtenerMensaje(int $dado1, int $dado2, int $dado3): array {
    $mensajes = [];
    $dadoAlto = max($dado1, $dado2, $dado3);

    if ($dado1 == $dado2) {
        $mensajes[] = "Has sacado pareja de $dado1 en dado 1 y 2 <br>";
    } elseif ($dado2 == $dado3) {
        $mensajes[] = "Has sacado pareja de $dado2 en dado 2 y 3 <br>";
    } elseif ($dado1 == $dado3) {
        $mensajes[] = "Has sacado pareja de $dado1 en dado 1 y 3 <br>";
    } else {
        $mensajes[] = "No has sacado pareja <br>";
    }

    $mensajes[] = "El dado más alto es $dadoAlto<br>";

    return $mensajes;
}

function main(): void {
    $dado1 = tirarDado();
    $dado2 = tirarDado();
    $dado3 = tirarDado();

    $mensajes = obtenerMensaje($dado1, $dado2, $dado3);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados Ej1</title>
        <link rel="stylesheet" href="../css/styles4.css">
    </head>
    <body>
        <h1>🎲 JUEGO: TRES DADOS</h1>
        <p>Actualice la página para mostrar una nueva tirada.</p>
        <p>
            <img src="../../../img/<?php echo $dado1 ?>.jpg" alt="<?php echo $dado1 ?>">
            <img src="../../../img/<?php echo $dado2 ?>.jpg" alt="<?php echo $dado2 ?>">
            <img src="../../../img/<?php echo $dado3 ?>.jpg" alt="<?php echo $dado3 ?>">
        </p>

        <?php foreach ($mensajes as $msg): ?>
            <p><?php echo $msg ?></p>
        <?php endforeach; ?>

        <footer>
            <?php echo date("d-M-Y, H:i"); ?>
            <p><cite>by Izan Alejo Pérez</cite></p>
        </footer>
    </body>
    </html>
    <?php
}

main();
?>
