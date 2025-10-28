<?php
session_start();
// Si ya está logueado, redirigir a películas
if(isset($_SESSION['usuario'])) {
    header('Location: 412.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br><h1 style="text-align: center;">Bienvenido/a!</h1><hr>
        <h2>Inicie sesión</h2><br>
        
        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-danger" role="alert">
                Usuario o contraseña incorrectos
            </div>
        <?php endif; ?>
        
        <form action="../ej_411/411.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>    
        </form>
    </div>
</body>
</html>