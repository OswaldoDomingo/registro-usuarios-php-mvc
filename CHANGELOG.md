# 📒 CHANGELOG - registro-usuarios-php-mvc


## [Mejora] - Control de acceso seguro a `registroExito.php`
- Implementada validación con `$_SESSION['registro_exito']`
- Redirección automática al formulario si no se ha completado el registro
- Añadido unset para limpiar datos tras mostrar la página de éxito
- Commit y push realizados; Pull Request creado y mergeado
- Issue cerrada y rama eliminada


## [0.1.0] - 2025-06-10

### Añadido
- Primer formulario de registro con campos nombre y correo.
- Estilos iniciales con Bootstrap.
- Validación de nombre y correo en el servidor.
- Control de acceso a `registroExito.php`.
- Documentación del proyecto con estructura de carpetas y estado.

### Modificado
- README.md reestructurado con separación clara por carpetas (view, controller, public).
- Mensajes de error visibles integrados en la vista del formulario.

### Pendiente (Próximas versiones)
- Validación doble de correo y contraseña.
- Almacenamiento de usuarios en fichero `.txt`.
- Conexión con base de datos MySQL.
- Gestión de sesiones, login, edición y borrado de usuarios.
- Validación en cliente con JavaScript.

## [0.1.1] - 2025-06-10
## [Mejora] - Añadido flujo de login

- Formulario de login en `registroLogin.php`
- Procesamiento de credenciales en `loginProcesar.php`
- Página de éxito tras login (`loginExito.php`)
- Gestión de errores y mensajes
