<?php
$page_title = "Ejercicio de autenticación";
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

            for($i=413; $i <= 415; $i++){
                $texto_lista = 'Ejercicio - ' . $i;
                echo "<li><a href='ejercicios/{$i}.php'>{$texto_lista}<a></li>";
            }
        
        ?>
        </ol>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>