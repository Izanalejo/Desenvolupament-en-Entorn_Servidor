<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
   
</head>
<body>
    <h1>Lista de Productos</h1>
    
    <?php if (isset($_SESSION['mensaje'])): ?>
        <div class="mensaje exito"><?= htmlspecialchars($_SESSION['mensaje']) ?></div>
        <?php unset($_SESSION['mensaje']); ?>
    <?php endif; ?>
    
    <?php if (isset($_SESSION['error'])): ?>
        <div class="mensaje error"><?= htmlspecialchars($_SESSION['error']) ?></div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <a href="index.php?action=nuevo" class="btn-nuevo"> Nuevo Producto</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categorías</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($content)): ?>
                <tr>
                    <td colspan="5" style="text-align: center; padding: 20px;">
                        No hay productos registrados
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach ($content as $p): ?>
                <tr>
                    <td><?= htmlspecialchars($p['id']) ?></td>
                    <td><?= htmlspecialchars($p['nombre']) ?></td>
                    <td><?= number_format($p['precio'], 2) ?>€</td>
                    <td class="categorias">
                        <?= $p['categorias'] ? htmlspecialchars($p['categorias']) : '<em>Sin categorías</em>' ?>
                    </td>
                    <td class="acciones">
                        <a href="index.php?action=editar&id=<?= $p['id'] ?>" title="Editar">✏️</a>
                        <a href="index.php?action=eliminar&id=<?= $p['id'] ?>" 
                            onclick="return confirm('¿Está seguro de eliminar este producto?')" 
                            title="Eliminar">🗑️</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>