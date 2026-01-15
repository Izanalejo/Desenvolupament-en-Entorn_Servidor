<h1>Lista de Productos</h1>
<a href="index.php?action=nuevo">➕ Nuevo Producto</a>
<table border="1" cellpadding="10" style="margin-top:20px; border-collapse: collapse;">
    <thead>
        <tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Acciones</th></tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= htmlspecialchars($p['nombre']) ?></td>
            <td><?= number_format($p['precio'], 2) ?>€</td>
            <td>
                <a href="index.php?action=editar&id=<?= $p['id'] ?>">✏️</a>
                <a href="index.php?action=eliminar&id=<?= $p['id'] ?>" onclick="return confirm('¿Borrar?')">🗑️</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>