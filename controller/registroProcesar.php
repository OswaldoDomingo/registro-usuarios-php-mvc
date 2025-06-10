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

function correoRegistrado($correo, $listadoCorreos) {
    return in_array($correo, $listadoCorreos);
}

$listadoCorreos = [
    'oswaldomingo@gmail.com',
    'juan.perez@email.com',
    'maria.lopez@email.com',
    'carlos.garcia@email.com',
    'ana.martin@email.com',
    'david.rodriguez@email.com',
    'laura.fernandez@email.com',
    'javier.gomez@email.com',
    'sofia.diaz@email.com',
    'miguel.sanchez@email.com',
    'elena.ruiz@email.com',
    'pedro.torres@email.com',
    'isabel.jimenez@email.com',
    'pablo.moreno@email.com',
    'cristina.alonso@email.com',
    'sergio.gutierrez@email.com',
    'marta.hernandez@email.com',
    'raul.navarro@email.com',
    'irene.ortega@email.com',
    'alejandro.ramos@email.com',
    'beatriz.castro@email.com'
];
                
?>