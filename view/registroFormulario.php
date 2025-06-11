<!-- Formulario de registro registroFormulario.php -->
<form method="post" action="registroHTML.php">
    <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" placeholder="Introduce tu nombre" required>
  <?php if (isset($error['nombre'])): ?>
    <div class="error"><?php echo $error['nombre']; ?></div>
  <?php endif; ?>
    <br>
    <label for="nombre">Contraseña:</label>
    <input type="password" name="claveAcceso" required>
    <?php if (isset($error['claveAcceso'])): ?>
        <div class="error"><?php echo $error['claveAcceso']; ?></div>
    <?php endif; ?>
    <br>
    <label for="nombre">Repite contraseña:</label>
    <input type="password" name="claveAccesoRepetida" required>
    <?php if (isset($error['claveAccesoRepetida'])): ?>
        <div class="error"><?php echo $error['claveAccesoRepetida']; ?></div>
    <?php endif; ?>
    <br>
    <label for="correo">Correo electrónico:</label>
  <input type="email" name="correo" placeholder="ejemplo@correo.com" required>
    <?php if (isset($error['correo'])): ?>
    <p class="error"><?php echo $error['correo']; ?></p>
    <?php endif; ?>
    <br>
    <label for="correo">Repetir Correo electrónico:</label>
    <input type="email" name="correoRepetido" placeholder="ejemplo@correo.com" required>
    <?php if (isset($error['correoRepetido'])): ?>
        <p class="error"><?php echo $error['correoRepetido']; ?></p>
    <?php endif; ?>
    <br>
  <input type="submit" name="enviar" value="Enviar">
</form>
       