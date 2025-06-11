<?php
ob_start(); // Inicia buffer de salida
session_start();
//registroHTML.php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include_once 'controller/registroProcesar.php';
include_once 'config/usuarios_pruebas.php';
global $listadoCorreos; // Lista de correos electrónicos de prueba
global $usuarios; // Lista de usuarios de prueba con sus contraseñas

if(isset($_POST['enviar'])){
    $nombre = recoge('nombre');
    $correo = recoge('correo');
    $error = [];
    if(!validarNombre($nombre)){
        $error['nombre'] = 'El nombre debe tener al menos 3 caracteres.';
    }
    if(!validarCorreo($correo)){
        $error['correo'] = 'El correo electrónico no es válido.';
    }

    if(correoRegistrado($correo, $usuarios)){
        $error['correo'] = 'El correo electrónico no debe estar registrado.';
    }

    if(!correosIguales($correo, recoge('correoRepetido'))){
        $error['correoRepetido'] = 'Los correos electrónicos no coinciden.';
    }
if(!contrasenyasIguales(recoge('claveAcceso'), recoge('claveAccesoRepetida'))){
    $error['claveAccesoRepetida'] = 'Las contraseñas no coinciden.';

}
        if (empty($error)) {
            $_SESSION['nombre'] = $nombre;
            $_SESSION['correo'] = $correo;
            $_SESSION['correoRepetido'] = recoge('correoRepetido');
            $_SESSION['claveAcceso'] = recoge('claveAcceso');
            $_SESSION['claveAccesoRepetida'] = recoge('claveAccesoRepetida');
            $_SESSION['registro_exito'] = true;
            header('Location: registroExito.php');
            exit();
        }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="public/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous"
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>

</head>
<body>
    <h1>FORMULARIO PARA REGISTRARSE</h1>
    <div class="formulario">
        <?php 
        include_once 'view/registroFormulario.php'; 
    ?>
        <p class="centrado">Si ya estas registrado pasa a la página Si ya estas registrado pasa a la página <a href="registroLogin.php">Login</a></p>
    </div>
    </body>
</html>