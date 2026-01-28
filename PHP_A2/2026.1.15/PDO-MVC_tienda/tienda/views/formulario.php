<?php
session_start();
$titulo = isset($id) ? "Editar Producto" : "Nuevo Producto";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    
</head>

<body>
    <h2><?= htmlspecialchars($titulo) ?></h2>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="error"><?= htmlspecialchars($_SESSION['error']) ?></div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <form action="index.php?action=guardar" method="POST">
        <input type="hidden" name="id" value="<?= $p['id'] ?? '' ?>">

        <div class="form-group">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($p['nombre'] ?? '') ?>" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio (€):</label>
            <input type="number" id="precio" name="precio" step="0.01" min="0.01" value="<?= $p['precio'] ?? '' ?>" required>
        </div>

        <!-- Reto 3: Checkboxes para categorías -->
        <div class="form-group">
            <label>Categorías:</label>
            <div class="checkbox-group">
                <?php foreach ($categorias as $cat): ?>
                    <div class="checkbox-item">
                        <label>
                            <input type="checkbox"
                                name="categorias[]"
                                value="<?= $cat['id'] ?>"
                                <?= in_array($cat['id'], $categoriasSeleccionadas) ? 'checked' : '' ?>>
                            <?= htmlspecialchars($cat['nombre']) ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
            <small>Selecciona una o más categorías</small>
        </div>

        <div class="form-group">
            <button type="submit">Guardar</button>
            <a href="index.php"><button type="button" class="cancel">Cancelar</button></a>
        </div>
    </form>
</body>

</html>