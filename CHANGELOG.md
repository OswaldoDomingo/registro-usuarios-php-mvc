# 📒 CHANGELOG - registro-usuarios-php-mvc

## [Día 1] - Estructura base y formulario
- Creada estructura de carpetas MVC
- Añadidos archivos iniciales: index.php, README.md, .gitignore, progreso.md
- Formulario de registro completo (`registroHTML.php`)
- Validación HTML mínima implementada

## [Día 2] - Validación en servidor
- Creado controlador `registroProcesar.php`
- Validación de nombre, correo y contraseña en PHP
- Redirección a página de éxito tras validación correcta
- Mensajes de error con feedback visual

## [Día 3] - Registro en fichero
- Añadida clase `Usuario.php`
- Modelo `RegistroFichero.php` para guardar y leer usuarios
- Datos almacenados en `usuarios.txt`
- Página para mostrar usuarios registrados

## [Día 4] - Registro en base de datos
- Creada base de datos `registro_usuarios` con tabla `usuarios`
- Añadido modelo `RegistroBD.php`
- Funcionalidades de escritura y lectura desde MySQL

## [Día 5] - Mejoras finales y documentación
- Sanitización de entradas con `htmlspecialchars()` y `filter_var()`
- Estilizado con Bootstrap y CSS
- Documentación completada (README, changelog)

## [Mejora] - Control de acceso seguro a `registroExito.php`
- Implementada validación con `$_SESSION['registro_exito']`
- Redirección automática al formulario si no se ha completado el registro
- Añadido unset para limpiar datos tras mostrar la página de éxito
