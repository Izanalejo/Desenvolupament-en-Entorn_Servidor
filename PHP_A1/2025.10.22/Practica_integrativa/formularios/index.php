<?php
$page_title = "Ejercicio formularios";
$current_page = "formularios";
require_once '../includes/header.php';


$texto_lista = 'Ejercicio';

?>


<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<main class="container">
    <section class="about">
        <h1><?= $page_title ?></h1>
        <ol>

        <?php

            for($i=402; $i <= 405; $i++){
                $texto_lista = 'Ejercicio - ' . $i;
                echo "<li><a href='ejercicios/Ej_{$i}/{$i}formulario.php'>{$texto_lista}<a></li>";
            }
        
        ?>
        </ol>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>