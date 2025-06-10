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
├── assets/            # Estilos CSS y otros recursos estáticos
│
├── index.php          # Punto de entrada
├── README.md
├── CHANGELOG.md
├── progreso.md
└── .gitignore
```

## 📅 Plan de trabajo (5 días)

1. **Día 1:** Estructura base MVC + formulario HTML con Bootstrap  
2. **Día 2:** Validaciones del registro y página de éxito  
3. **Día 3:** Escritura y lectura en fichero `.txt`  
4. **Día 4:** Implementación con base de datos MySQL  
5. **Día 5:** Mejora visual, sanitización y documentación  

## 🧪 Funcionalidades implementadas

- Validación de:
  - Nombre
  - Correo electrónico (y verificación)
  - Contraseña (y confirmación)
- Almacenamiento de datos en:
  - Fichero plano (`usuarios.txt`)
  - Base de datos MySQL (`registro_usuarios`)
- Consulta de usuarios registrados
- Feedback visual con Bootstrap
- Código organizado en carpetas MVC

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

## ✅ Estado del proyecto

✔️ Funcionalidad de registro y consulta terminada  
🔧 Próximas mejoras posibles:
- Validación con JavaScript
- Login y autenticación de sesión
- Edición y borrado de usuarios

## 👨‍💻 Autor

**Oswaldo Domingo**  
[GitHub](https://github.com/OswaldoDomingo)
