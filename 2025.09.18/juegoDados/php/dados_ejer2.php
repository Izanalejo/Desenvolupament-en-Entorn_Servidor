<?php
    //Declaración de varibles
    (int)$dado1 = rand(1, 6);
    (int)$dado2 = rand(1, 6);
    (int)$dadoAlto = max($dado1,$dado2);
    //Variable mensaje 
    (string)$mensaje1="";

    //Mensajes en caso de parejas o dado mayor
    if($dado1==$dado2){
        $mensaje1 = "Has sacado pareja de $dado1<br>";
    }else{
        $mensaje1 = "El dado mas alto es $dadoAlto<br>";
    }
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