<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Mi Sitio Web'; ?></title>
    <!--<link rel="stylesheet" href="css/style.css"> -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <header class="site-header">
        <div class="container">
            <h1>Mi Sitio Web</h1>
            <p>Estructura modular con PHP</p>
        </div>
    </header>