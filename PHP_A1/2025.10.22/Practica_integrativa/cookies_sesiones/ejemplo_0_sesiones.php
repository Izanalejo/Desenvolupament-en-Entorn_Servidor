<?php
// Variables de sesión: $_SESSION[]
// En lugar de cookies, los datos se almacenan en $_SESSION['visitas'] en el servidor.
// Iniciar la sesión.
// Se debe llamar AL INICIO del archivo para iniciar o reanudar la sesión.
session_start();

// Procesar reinicio de contador si se solicita
if (isset($_POST['reiniciar'])) {
    $_SESSION = [];     // Destruir todas las variables de sesión
    session_destroy();  // Destruir la sesión completamente
    session_start();    // Iniciar nueva sesión
    
    header('Location: ' . $_SERVER['PHP_SELF']);    // Redirigir para evitar reenvío del formulario
    exit();
}

// Obtener o inicializar el contador de visitas
if (isset($_SESSION['visitas'])) {
    // Ya existe el contador, incrementarlo
    $_SESSION['visitas'] = $_SESSION['visitas'] + 1;
    $esPrimeraVisita = false;
} else {
    // Primera visita en esta sesión
    $_SESSION['visitas'] = 1;
    $esPrimeraVisita = true;
    
    // Guardar la hora de inicio de sesión
    $_SESSION['inicio_sesion'] = date('Y-m-d H:i:s');
}

// Obtener el valor actual
$visitas = $_SESSION['visitas'];

// Calcular Tiempo de sesión activa: Cuánto tiempo lleva abierta
$tiempoSesion = 'N/A';
if (isset($_SESSION['inicio_sesion'])) {
    $inicio = strtotime($_SESSION['inicio_sesion']);
    $actual = time();
    $diferencia = $actual - $inicio;
    
    $minutos = floor($diferencia / 60);
    $segundos = $diferencia % 60;
    $tiempoSesion = "{$minutos} min, {$segundos} seg";
}
?>

<!-- PARTE HTML -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas - Sesiones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Contador de Visitas con Sesiones</h1>
        
        <?php if ($esPrimeraVisita): ?>
            <h2>¡Bienvenido! 🎉</h2>
            <div class="info-box">
                <p><strong>Esta es tu primera visita en esta sesión.</strong></p>
                <p>Tu contador de visitas ha sido inicializado. Se mantendrá activo mientras tu navegador esté abierto o hasta que cierres la sesión.</p>
            </div>
        <?php else: ?>
            <h2>¡Bienvenido de nuevo! 👋</h2>
            <div class="info-box">
                <p><strong>Número de visitas en esta sesión:</strong> <?php echo $visitas; ?></p>
                <p>Has recargado esta página <?php echo $visitas; ?> veces desde que iniciaste tu sesión.</p>
            </div>
        <?php endif; ?>
        
        <hr>
        
        <h3>Gestión del Contador</h3>
        <form method="POST" action="">
            <button type="submit" name="reiniciar" value="1">🔄 Reiniciar Contador y Sesión</button>
        </form>
        
        <hr>
        
        <h3>Información de la Sesión</h3>
        <table>
            <tr>
                <th>Dato</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Primera visita</td>
                <td><?php echo $esPrimeraVisita ? '✅ Sí' : '❌ No'; ?></td>
            </tr>
            <tr>
                <td>Contador actual</td>
                <td><strong><?php echo $visitas; ?></strong></td>
            </tr>
            <tr>
                <td>ID de Sesión</td>
                <td><code><?php echo session_id(); ?></code></td>
            </tr>
            <tr>
                <td>Inicio de sesión</td>
                <td><?php echo isset($_SESSION['inicio_sesion']) ? $_SESSION['inicio_sesion'] : 'N/A'; ?></td>
            </tr>
            <tr>
                <td>Tiempo de sesión activa</td>
                <td><?php echo $tiempoSesion; ?></td>
            </tr>
        </table>
        
        <hr>
        
        <h3>Diferencias: Sesiones vs Cookies</h3>
        <div class="warning-box">
            <h4>Características de las Sesiones:</h4>
            <ul>
                <li><strong>Almacenamiento:</strong> Los datos se guardan en el servidor, no en el navegador</li>
                <li><strong>Duración:</strong> La sesión termina cuando cierras el navegador (por defecto)</li>
                <li><strong>Seguridad:</strong> Más seguro porque los datos no viajan al cliente</li>
                <li><strong>Tamaño:</strong> Puede almacenar más datos que las cookies</li>
                <li><strong>Limitación:</strong> Se pierde al cerrar el navegador (no persiste entre sesiones)</li>
            </ul>
        </div>
        
        <p><small>
            <strong>Nota:</strong> Este contador se reiniciará automáticamente cuando:
            <br>• Cierres el navegador
            <br>• La sesión expire por inactividad (tiempo configurado en el servidor)
            <br>• Presiones el botón "Reiniciar Contador y Sesión"
        </small></p>
    </div>
</body>
</html>