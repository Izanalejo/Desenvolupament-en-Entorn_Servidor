<?php
// Iniciar sesión para mensajes
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'config/Database.php';
require_once 'controllers/ProductoController.php';

$db = Database::conectar();
$controller = new ProductoController($db);

$action = $_GET['action'] ?? 'listar';
$id = $_GET['id'] ?? null;

match ($action) {
    'listar'   => $controller->mostrarLista(),
    'nuevo'    => $controller->mostrarFormulario(),
    'editar'   => $controller->mostrarFormulario($id),
    'guardar'  => $controller->procesar(),
    'eliminar' => $controller->borrar($id),
    default    => $controller->mostrarLista(),
};