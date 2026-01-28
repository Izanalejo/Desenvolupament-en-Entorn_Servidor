<?php
class Categoria {
    public function __construct(private PDO $db) {}

    public function listar(): array {
        return $this->db->query("SELECT * FROM categorias ORDER BY nombre ASC")->fetchAll();
    }

    public function obtenerPorId(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM categorias WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }
}