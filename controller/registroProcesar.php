<?php
function recoge($var){
    return isset($_REQUEST[$var])
        ? strip_tags(trim(preg_replace('/ +/', ' ', $_REQUEST[$var])))
        : '';
}

function validarNombre ($var){
    return strlen($var) >= 3;
}

function validarCorreo($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

//Comprobar si el correo está registrado en $usuarios
function correoRegistrado($correo, $usuarios) {
    $nombresUsuarios = array_keys($usuarios);

        return in_array($correo, $nombresUsuarios);
}

//Comprobar si los dos correos son iguales
function correosIguales($correo, $correoRepetido) {
    return $correo === $correoRepetido;
}
 // Comprobar si las dos contraseñas son iguales
function contrasenyasIguales($claveAcceso, $claveAccesoRepetida) {
    return $claveAcceso === $claveAccesoRepetida;
}







?>