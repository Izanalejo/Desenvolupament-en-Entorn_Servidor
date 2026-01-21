<?php $titulo = isset($id) ? "Editar Producto" : "Nuevo Producto"; ?>
<h2><?= $titulo ?></h2>
<form action="index.php?action=guardar" method="POST">
    <input type="hidden" name="id" value="<?= $p['id'] ?? '' ?>">
    <label>Nombre: <input type="text" name="nombre" value="<?= htmlspecialchars($p['nombre'] ?? '') ?>" required></label><br><br>
    <label>Precio: <input type="number" step="0.01" name="precio" value="<?= $p['precio'] ?? '' ?>" required></label><br><br>
    <button type="submit">Guardar</button>
    <a href="index.php">Cancelar</a>
</form>