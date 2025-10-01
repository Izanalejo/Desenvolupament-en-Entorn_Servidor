<?php
    //Declaración de varibles
    (int)$dado1 = rand(1, 6);
    (int)$dado2 = rand(1, 6);
    (int)$dadoAlto = max($dado1,$dado2);
    //Variable mensaje 
    (string)$mensaje1="";
    

    //Imprimir la tirada de los dados
    echo "Tirada dado 1: $dado1 <br>";
    echo "Tirada dado 2: $dado2 <br>";

    //Mensajes en caso de parejas o dado mayor
    if($dado1==$dado2){
        $mensaje1 = "Has sacado pareja de $dado1<br>";
    }else{
        $mensaje1 = "El dado mas alto es $dadoAlto<br>";
    }

    //Fecha y hora
    echo date("d-M-Y, H:i");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Ej1</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>🎲JUEGO: DOS DADOS</h1>
    <p>Actualice la página para mostrar una nueva tirada.</p>
    <p>
    <img src="../img/<?php echo $dado1?>.jpg" alt="<?php echo $dado1?>">
    <img src="../img/<?php echo $dado2?>.jpg" alt="<?php echo $dado2?>">
    </p>

    <p><?php echo $mensaje1 ?></p>
    <?php echo date ("d-M-Y, H:i");?>
    <p>by Izan Alejo Pérez</p>
</body>
</html>