<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Generar Invitaciones</title>
  </head>
  <body>
    <h1>Generar Invitaciones</h1>
    <form action="generate.php" method="POST" enctype="multipart/form-data">
      <label for="event_date">Fecha del evento:</label><br>
      <input type="date" id="event_date" name="event_date" required><br><br>

      <label for="location">Ubicación del evento:</label><br>
      <input type="text" id="location" name="location" required><br><br>

      <label for="event_image">Cargar archivos:</label><br>
      <input type="file" id="event_image" name="files" accept="image/*" required><br><br>

      <button type="submit">Generar Invitaciones</button>
    </form>
  </body>
</html>