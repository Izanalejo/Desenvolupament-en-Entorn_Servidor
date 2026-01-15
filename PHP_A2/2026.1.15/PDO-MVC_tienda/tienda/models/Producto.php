<?php
class Producto {
    public function __construct(private PDO $db) {}

    public function listar(): array {
        return $this->db->query("SELECT * FROM productos ORDER BY id DESC")->fetchAll();
    }

    public function obtenerPorId(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function guardar(string $nombre, float $precio, ?int $id = null): bool {
        if ($id) {
            $stmt = $this->db->prepare("UPDATE productos SET nombre = ?, precio = ? WHERE id = ?");
            return $stmt->execute([$nombre, $precio, $id]);
        }
        $stmt = $this->db->prepare("INSERT INTO productos (nombre, precio) VALUES (?, ?)");
        return $stmt->execute([$nombre, $precio]);
    }
    public function eliminar(int $id): bool {
        $stmt = $this->db->prepare("DELETE FROM productos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}