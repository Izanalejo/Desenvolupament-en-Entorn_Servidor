<?php
    //Declaración de varibles
    (int)$dado1 = rand(1, 6);
    (int)$dado2 = rand(1, 6);
    (int)$dado3 = rand(1, 6);
    (int)$dadoAlto = max($dado1,$dado2,$dado3);
    //Variable mensaje 
    (string)$mensaje1="";
    (string)$mensaje2="";

    //Mensajes en caso de parejas o dado mayor
    if($dado1==$dado2){
        $mensaje1 = "Has sacado pareja de $dado1 en dado 1 y 2 <br>";
        $mensaje2 = "El dado mas alto es $dadoAlto<br>";
    }else if($dado2==$dado3){
        $mensaje1 = "Has sacado pareja de $dado1 en dado 2 y 3 <br>";
        $mensaje2 = "El dado mas alto es $dadoAlto<br>";
    }if($dado1==$dado3){
        $mensaje1 = "Has sacado pareja de $dado1 en dado 1 y 3 <br>";
        $mensaje2 = "El dado mas alto es $dadoAlto<br>";
    }else{
        $mensaje2 = "El dado mas alto es $dadoAlto<br>";
    }
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
    <h1>🎲JUEGO: TRES DADOS</h1>
    <p>Actualice la página para mostrar una nueva tirada.</p>
    <p>
    <img src="../../../img/<?php echo $dado1?>.jpg" alt="<?php echo $dado1?>">
    <img src="../../../img/<?php echo $dado2?>.jpg" alt="<?php echo $dado2?>">
    <img src="../../../img/<?php echo $dado3?>.jpg" alt="<?php echo $dado2?>">
    </p>

    <p><?php echo $mensaje1 ?></p>
    <p><?php echo $mensaje2 ?></p>
    <footer>
        <?php echo date ("d-M-Y, H:i");?>
        <p><cite>by Izan Alejo Pérez</cite></p>
    </footer>
</body>
</html>