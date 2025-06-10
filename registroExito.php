<?php
session_start();
$nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
$correo = isset($_SESSION['correo']) ? $_SESSION['correo'] : '';
if (!isset($_SESSION['registro_exito'])) {
    header('Location: registroHtml.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de usuario</title>
    <link rel="stylesheet" href="public/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Página de bienvenida</h1>
    <p>Hola, <?php echo htmlspecialchars($nombre); ?>. Tu correo electrónico es: <?php echo htmlspecialchars($correo); ?>.</p>
    <p>¡Gracias por regresar!</p>
    <a href="registroHTML.php" class="btn btn-primary">Volver a registrar</a>

    <?php
        unset($_SESSION['registro_exito']);
        unset($_SESSION['nombre']);
        unset($_SESSION['correo']);
    ?>
</body>
</html>