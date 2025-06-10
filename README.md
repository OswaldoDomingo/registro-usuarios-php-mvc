# 📋 registro-usuarios-php-mvc

Sistema básico de registro de usuarios desarrollado con PHP siguiendo una estructura MVC sencilla. El proyecto está diseñado como práctica intensiva de 5 días, incluyendo validación de formularios, persistencia de datos en ficheros y base de datos, y una interfaz clara con Bootstrap.

## 🚀 Objetivos del Proyecto

- Formularios de registro con validación en servidor
- Almacenamiento de usuarios en ficheros `.txt` y base de datos MySQL
- Separación de lógica usando una estructura MVC
- Interfaz limpia con HTML, CSS y Bootstrap
- Mejores prácticas de seguridad y sanitización de datos

## 🛠️ Tecnologías utilizadas

- PHP 8+
- HTML5 / CSS3
- Bootstrap 5
- MySQL
- Arquitectura MVC (mínima)
- (Opcional) JavaScript

## 📂 Estructura del proyecto

```
registro-usuarios-php-mvc/
│
├── controller/        # Lógica de control
├── model/             # Clases y gestión de datos (ficheros y BD)
├── view/              # Formularios y vistas HTML
├── core/              # Funciones auxiliares reutilizables
├── data/              # Archivos de datos (como usuarios.txt)
├── public/            # Estilos CSS y otros recursos estáticos
├── registroHTML.php   # Formulario de registro HTML
├── registroExito.php  # Página de éxito tras el registro
├── README.md          # Documentación del proyecto
├── CHANGELOG.md       # Historial de cambios
├── progreso.md        # Plan de trabajo y progreso
└── .gitignore         # Archivos ignorados por Git
```

## ✅ Estado del proyecto

### 🧾 `view/` (Formularios y páginas visibles)

- ✅ Formulario de registro simple (`registroHTML.php`)
    - Campos: nombre, correo electrónico
    - Interfaz con HTML y Bootstrap
    - Mensajes de error visibles
- ✅ Página de éxito tras el registro (`registroExito.php`)
- 🟡 Mejora del formulario con doble entrada de correo y contraseña
- 🔜 Validación visual en cliente con JavaScript
- 🟡 Feedback visual con Bootstrap (mensajes, colores, etc.)
- 🔜 Vista para consultar usuarios registrados

---

### 🧠 `controller/` (Procesamiento y lógica del registro)

- ✅ Recepción de datos desde formulario (`registroFormulario.php`)
- ✅ Validación de campos:
    - Nombre (longitud, caracteres válidos)
    - Correo electrónico (formato, unicidad)
- ✅ Sanitización de datos recibidos
- ✅ Control de acceso a la página de éxito (evitar acceso directo)
- 🟡 Comprobación de correos repetidos en fichero
- 🔜 Validación cruzada de doble correo y contraseña
- 🔜 Escritura y lectura de usuarios en fichero `.txt`
- 🔜 Persistencia de datos en base de datos MySQL
- 🔜 Consulta, edición y borrado de usuarios registrados
- 🔜 Gestión de sesiones para login y autenticación

---

### 🎨 `public/` (Recursos visuales y estáticos)

- ✅ Estilos personalizados con CSS
- ✅ Bootstrap 5 incluido desde CDN
- 🔜 Archivos JS para validación en cliente
- 🔜 Mejora del diseño visual general (formularios, mensajes, botones)

## 🆕 Mejoras recientes

- Añadido control de acceso en `registroExito.php` para impedir visitas directas sin haber pasado por el formulario



## 📅 Plan de trabajo

1. Estructura base MVC + formulario HTML con Bootstrap  
2. Validaciones del registro y página de éxito  
3. Escritura y lectura en fichero `.txt`  
4. Implementación con base de datos MySQL  
5. Mejora visual, sanitización y documentación  



## 🧰 Cómo usar

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tuusuario/registro-usuarios-php-mvc.git
   ```

2. Configura tu servidor local (XAMPP, Laragon o similar) y asegúrate de que:
   - PHP está habilitado
   - MySQL está corriendo

3. Crea la base de datos `registro_usuarios` e importa el SQL (si se incluye).

4. Abre en navegador:
   ```
   http://localhost/registro-usuarios-php-mvc
   ```



## 👨‍💻 Autor

**Oswaldo Domingo**  
[GitHub](https://github.com/OswaldoDomingo)
