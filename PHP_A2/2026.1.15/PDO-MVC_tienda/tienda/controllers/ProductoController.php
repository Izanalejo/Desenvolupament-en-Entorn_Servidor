<?php
require_once 'models/Producto.php';

class ProductoController {
    private Producto $modelo;
    private Producto $view;

    public function __construct(PDO $db) {
        $this->modelo = new Producto($db);
        $this->view = new Producto($db);
    }

    public function mostrarLista() {
        $productos = $this->modelo->listar();
        include 'views/listar.php';
    }

    public function mostrarFormulario($id = null) {
        $p = $id ? $this->modelo->obtenerPorId($id) : null;
        include 'views/formulario.php';
    }

    public function procesar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;
            $this->modelo->guardar($_POST['nombre'], (float)$_POST['precio'], $id);
            header("Location: index.php");
        }
    }

    public function borrar($id) {
        $this->modelo->eliminar((int)$id);
        header("Location: index.php");
    }
}