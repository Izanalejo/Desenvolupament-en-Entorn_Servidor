<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        (int)$numero1 = 10;
        (int)$numero2 = 20;
        (string)$nom1 = "Izan";
        (string)$apellido1 = "Alejo";
        
        if($numero1 > 0 && $numero2<$numero1){
            echo "$nom1";
        }else if($numero1 > 0 && $numero2 >= $numero1){
            echo "$apellido1";
        }else if($numero1 < 0){
            echo "$nom1 $apellido1";
        }
    ?>
</body>
</html>