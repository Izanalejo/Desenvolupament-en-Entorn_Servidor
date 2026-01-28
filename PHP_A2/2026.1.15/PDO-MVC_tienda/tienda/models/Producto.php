<?php
class Producto {
    public function __construct(private PDO $db) {}

    // Reto 2: Listar productos con GROUP_CONCAT para mostrar categorías
    public function listar(): array {
        $sql = "SELECT 
                    p.id, 
                    p.nombre, 
                    p.precio,
                    GROUP_CONCAT(c.nombre ORDER BY c.nombre SEPARATOR ', ') as categorias
                FROM productos p
                LEFT JOIN producto_categoria pc ON p.id = pc.producto_id
                LEFT JOIN categorias c ON pc.categoria_id = c.id
                GROUP BY p.id
                ORDER BY p.id DESC";
        
        return $this->db->query($sql)->fetchAll();
    }

    public function obtenerPorId(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    // Obtener categorías asociadas a un producto
    public function obtenerCategorias(int $productoId): array {
        $stmt = $this->db->prepare(
            "SELECT categoria_id 
            FROM producto_categoria 
            WHERE producto_id = ?"
        );
        $stmt->execute([$productoId]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    // Reto 4: Guardar con transacciones
    public function guardar(string $nombre, float $precio, array $categorias = [], ?int $id = null): bool {
        try {
            $this->db->beginTransaction();

            if ($id) {
                // Actualizar producto existente
                $stmt = $this->db->prepare("UPDATE productos SET nombre = ?, precio = ? WHERE id = ?");
                $stmt->execute([$nombre, $precio, $id]);
                
                // Eliminar categorías anteriores
                $stmt = $this->db->prepare("DELETE FROM producto_categoria WHERE producto_id = ?");
                $stmt->execute([$id]);
            } else {
                // Insertar nuevo producto
                $stmt = $this->db->prepare("INSERT INTO productos (nombre, precio) VALUES (?, ?)");
                $stmt->execute([$nombre, $precio]);
                $id = (int)$this->db->lastInsertId();
            }

            // Insertar relaciones con categorías
            if (!empty($categorias)) {
                $stmt = $this->db->prepare(
                    "INSERT INTO producto_categoria (producto_id, categoria_id) VALUES (?, ?)"
                );
                foreach ($categorias as $categoriaId) {
                    $stmt->execute([$id, (int)$categoriaId]);
                }
            }

            $this->db->commit();
            return true;

        } catch (PDOException $e) {
            $this->db->rollBack();
            error_log("Error al guardar producto: " . $e->getMessage());
            return false;
        }
    }

    public function eliminar(int $id): bool {
        // Gracias al ON DELETE CASCADE, se eliminan automáticamente las relaciones
        $stmt = $this->db->prepare("DELETE FROM productos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}