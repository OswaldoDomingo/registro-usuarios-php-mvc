<?php
include_once 'registroProcesar.php';
include_once 'config/usuarios_pruebas.php';


// Comprobar que el usuario y la contraseña son correctos
function compararNombre($usuario, $claveAcceso){
global $usuarios;
    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] ===$claveAcceso) {
        return true;
    } else {
        return false;
    }
}



?>