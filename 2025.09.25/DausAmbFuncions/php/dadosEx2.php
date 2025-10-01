<?php
    function tirarDado(): int {
        return rand(1, 6);
    }

    function mostrarTirada(int $dado1, int $dado2): void {
        echo "Tirada dado 1: $dado1 <br>";
        echo "Tirada dado 2: $dado2 <br>";
    }

    function obtenerMensaje(int $dado1, int $dado2): string {
        if ($dado1 === $dado2) {
            return "Has sacado pareja de $dado1<br>";
        } else {
            $dadoAlto = max($dado1, $dado2);
            return "El dado más alto es $dadoAlto<br>";
        }
    }

    function main():void{
        $dado1 = tirarDado();
        $dado2 = tirarDado();
        $mensaje1 = obtenerMensaje($dado1, $dado2);

        ?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Dados Ej1</title>
                <link rel="stylesheet" href="../css/styles2.css">
            </head>
            <body>
                <h1>🎲JUEGO: DOS DADOS</h1>
                <p>Actualice la página para mostrar una nueva tirada.</p>
                <fieldset>
                    <legend>Tirada actual</legend>
                    <p>
                        <img src="../../../img/<?php echo $dado1?>.jpg" alt="<?php echo $dado1?>">
                        <img src="../../../img/<?php echo $dado2?>.jpg" alt="<?php echo $dado2?>">
                    </p>
                    <p><?php echo $mensaje1 ?></p>
                    <button onclick="location.reload()">🎲 Volver a tirar</button>
                </fieldset>
                <footer>
                    <!--Fecha y hora-->
                    <?php echo date("d-M-Y, H:i");?> <br> 
                    <cite>by Izan Alejo Pérez</cite>
                </footer>
            </body>
        </html>
        <?php
    }
    main();


?>