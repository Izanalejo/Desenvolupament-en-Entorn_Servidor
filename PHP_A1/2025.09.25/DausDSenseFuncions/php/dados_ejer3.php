<?php
    //Declaración de varibles
    (int)$dado1 = rand(1, 6);
    (int)$dado2 = rand(1, 6);
    (int)$dado3 = rand(1, 6);
    (int)$dado4 = rand(1, 6);
    $resultado1 = $dado1+$dado2;
    $resultado2 = $dado3+$dado4;
    //Variable mensaje 
    (string)$mensaje1="";

    //Mensajes en caso de parejas o dado mayor
    if($resultado1 > $resultado2){
        $mensaje1 = "El jugador ganador es: Jugador 1<br>";
    }else if($resultado1 < $resultado2){
        $mensaje1 = "El jugador ganador es: Jugador 2<br>";
    }else if($resultado1 == $resultado2){
        $mensaje1 = "Empate";
    }
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
            <img src="../../../img/<?php echo $dado3?>.jpg" alt="<?php echo $dado1?>">
            <img src="../../../img/<?php echo $dado4?>.jpg" alt="<?php echo $dado2?>">
        </p>
    </fieldset>
      <p><?php echo $mensaje1 ?></p>
    <footer>
      
        <?php echo date ("d-M-Y, H:i");?>
        <p><cite>by Izan Alejo Pérez</cite></p>
    </footer>
</body>
</html>