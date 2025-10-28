<?php
$page_title = "Ejercicio de Cookies y Sesiones";
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
            echo "<ol>";
            echo "<li><a href= 'EJEMPLO_0_COOKIES.php'>EJEMPLO 0 COOKIES</a></li>";
            echo "<li><a href= 'Ejemplo_0_sesiones.php'>EJEMPLO 0 SESIONES</a></li>";
            
            for($i=406; $i <= 409; $i++){
                $texto_lista = 'Ejercicio - ' . $i;
                echo "<li><a href='ejercicios/ej_{$i}/{$i}.php'>{$texto_lista}<a></li>";
            }
            echo "</ol>";

        ?>
        </ol>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>