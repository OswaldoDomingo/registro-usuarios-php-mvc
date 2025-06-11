<?php
session_start();
ob_start(); // Inicia el buffer de salida
//registroLogin.php

//include_once 'controller/registroProcesar.php'; // Solo si lo necesitas realmente aquí
include_once 'controller/loginProcesar.php'; // Solo si lo necesitas realmente aquí

if(isset($_POST['enviar'])) {
    $usuario = recoge('usuario');
    $claveAcceso = recoge('claveAcceso');
    $error = [];

    if(!compararNombre($usuario, $claveAcceso)){
        $error['usuario'] = 'El usuario o la contraseña son incorrectos.';
    }

    if (empty($error)) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['login_exito'] = true;
        header('Location: loginExito.php');
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="public/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Iniciar sesión</h1>
<?php include_once 'view/registroFormularioLogin.php'; ?>
<p class="centrado">¿No tienes cuenta? <a href="registroHTML.php">Regístrate aquí</a></p>
</body>
</html>
