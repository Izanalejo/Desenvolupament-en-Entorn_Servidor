<?php
require_once 'models/Producto.php';
require_once 'models/Categoria.php';
require_once 'ProductoView.php';

class ProductoController {
    private Producto $modelo;
    private Categoria $categoriaModelo;
    private ProductoView $view;

    public function __construct(PDO $db) {
        $this->modelo = new Producto($db);
        $this->categoriaModelo = new Categoria($db);
        $this->view = new ProductoView();
    }

    public function mostrarLista() {
        $productos = $this->modelo->listar();
        $this->view->display("views/listar.php", ['content' => $productos]);
    }

    // Reto 3: Cargar categorías y producto para el formulario
    public function mostrarFormulario($id = null) {
        $p = $id ? $this->modelo->obtenerPorId($id) : null;
        $categorias = $this->categoriaModelo->listar();
        $categoriasSeleccionadas = $id ? $this->modelo->obtenerCategorias($id) : [];
        
        $this->view->display('views/formulario.php', [
            'p' => $p,
            'id' => $id,
            'categorias' => $categorias,
            'categoriasSeleccionadas' => $categoriasSeleccionadas
        ]);
    }

    // Reto 4: Procesar con validación y transacciones
    public function procesar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validación de datos
            $nombre = trim($_POST['nombre'] ?? '');
            $precio = $_POST['precio'] ?? 0;
            $categorias = $_POST['categorias'] ?? [];
            $id = !empty($_POST['id']) ? (int)$_POST['id'] : null;

            // Validación del servidor
            if (empty($nombre)) {
                $_SESSION['error'] = "El nombre es obligatorio";
                header("Location: index.php?action=" . ($id ? "editar&id=$id" : "nuevo"));
                exit;
            }

            if ($precio <= 0) {
                $_SESSION['error'] = "El precio debe ser mayor que 0";
                header("Location: index.php?action=" . ($id ? "editar&id=$id" : "nuevo"));
                exit;
            }

            // Guardar con transacción
            $resultado = $this->modelo->guardar($nombre, (float)$precio, $categorias, $id);
            
            if ($resultado) {
                $_SESSION['mensaje'] = "Producto guardado correctamente";
            } else {
                $_SESSION['error'] = "Error al guardar el producto";
            }
            
            header("Location: index.php");
            exit;
        }
    }

    public function borrar($id) {
        if ($this->modelo->eliminar((int)$id)) {
            $_SESSION['mensaje'] = "Producto eliminado correctamente";
        } else {
            $_SESSION['error'] = "Error al eliminar el producto";
        }
        header("Location: index.php");
        exit;
    }
}