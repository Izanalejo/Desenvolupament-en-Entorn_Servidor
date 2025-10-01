<?php
    function tirarDado(): int {
        return rand(1, 6);
    }

    function obtenerMensaje(int $dado1, int $dado2, int $dado3, int $dado4): string {
        $resultado1 = $dado1+$dado2;
        $resultado2 = $dado3+$dado4;
        
        if($resultado1 > $resultado2){
        return "El jugador ganador es: Jugador 1<br>";
    }else if($resultado1 < $resultado2){
        return "El jugador ganador es: Jugador 2<br>";
    }else if($resultado1 == $resultado2){
        return "Empate";
    }
    

    }

    function main():void{
        $dado1 = tirarDado();
        $dado2 = tirarDado();
        $dado3 = tirarDado();   
        $dado4 = tirarDado();

        $mensaje1 = obtenerMensaje($dado1, $dado2, $dado3, $dado4);
        
        ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Dados Ej1</title>
                    <link rel="stylesheet" href="../css/styles3.css?v=1.0">
                </head>
                <body>
                    <h1>🎲JUEGO: DADO MÁS ALTO PAREJAS</h1>
                    <p>Actualice la página para mostrar una nueva tirada.</p>
                    <fieldset id="jugador1">
                        <p>
                            <img src="../../../img/<?php echo $dado1?>.jpg" alt="<?php echo $dado1?>">
                            <img src="../../../img/<?php echo $dado2?>.jpg" alt="<?php echo $dado2?>">
                        </p>
                    </fieldset><br>
                    <fieldset id="jugador2">
                        <p>
                            <img src="../../../img/<?php echo $dado3?>.jpg" alt="<?php echo $dado3?>">
                            <img src="../../../img/<?php echo $dado4?>.jpg" alt="<?php echo $dado4?>">
                        </p>
                    </fieldset>
                    <p><?php echo $mensaje1 ?>
                </p>
                    <footer>
                    
                        <?php echo date ("d-M-Y, H:i");?>
                        <p><cite>by Izan Alejo Pérez</cite></p>
                    </footer>
                </body>
            </html>
        <?php
    }
    main();
?>