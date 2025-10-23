<?php
$page_title = "Inicio";
$current_page = "inicio";
require_once 'includes/header.php';

?>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<main class="container">
    <section class="hero">
        <h1>Bienvenido a Mi Sitio Web</h1>
        <p>Este es un ejemplo de estructura web modular en PHP</p>
    </section>
    
    <section class="content">
        <div class="card">
            <h2>Sección 1</h2>
            <p>Contenido de ejemplo para demostrar la estructura modular.</p>
        </div>
        <div class="card">
            <h2>Sección 2</h2>
            <p>Los componentes navbar, header y footer son reutilizables.</p>
        </div>
    </section>

    <?php
setcookie('accesos', 0, time() + 3600);
$accesosPagina = 0;
    if (isset($_COOKIE['accesos'])) { 
        $accesosPagina = $_COOKIE['accesos']; // recuperamos una cookie
        setcookie('accesos', ++$accesosPagina); // le asignamos un valor
    }
    echo $_COOKIE['accesos'] . '' . $accesosPagina . '';
    ?>
</main>

<?php require_once 'includes/footer.php'; ?>