<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    header('Location: 412.php');
    exit();
}

$peliculas = $_SESSION['peliculas'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <h1>Listado de Películas</h1>
        <hr>
        
        <nav class="mb-4">
            <a href="412peliculas.php" class="btn btn-primary">Películas</a>
            <a href="414series.php" class="btn btn-secondary">Series</a>
            <a href="413logout.php" class="btn btn-danger float-end">Cerrar Sesión</a>
        </nav>
        
        <p><strong>Usuario:</strong> <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
        
        <ul>
            <?php foreach($peliculas as $pelicula): ?>
                <li><?php echo htmlspecialchars($pelicula); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>