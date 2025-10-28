<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Subida de archivo</title>
</head>
<body>
  <h2>Subir archivo</h2>

  <form action="404subida.php" method="POST" enctype="multipart/form-data">
    <label for="archivo">Selecciona un archivo:</label>
    <input type="file" name="archivo" id="archivo" required><br><br>

    <label for="anchura">Anchura:</label>
    <input type="number" name="anchura" id="anchura" required><br><br>

    <label for="altura">Altura:</label>
    <input type="number" name="altura" id="altura" required><br><br>

    <input type="submit" value="Subir">
  </form>
</body>
</html>
