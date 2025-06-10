    <?php
ob_start(); // Inicia buffer de salida
session_start();
//registroHTML.php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include_once 'controller/registroProcesar.php';

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
    if(!correoRegistrado($correo, $listadoCorreos)){
        $error['correo'] = 'El correo electrónico debe estar registrado.';
    }

        if (empty($error)) {
            $_SESSION['nombre'] = $nombre;
            $_SESSION['correo'] = $correo;
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

</head>
<body>
    <h1>FORMULARIO</h1>
    <div class="formulario">
        <?php 
        include_once 'view/registroFormulario.php'; 
    ?>
    </div>
    </body>
</html>