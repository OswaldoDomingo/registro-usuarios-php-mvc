<!-- Formulario de registro registroFormulario.php -->
<form method="post" action="registroHTML.php">
    <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" placeholder="Introduce tu nombre" required>
  <?php if (isset($error['nombre'])): ?>
    <div class="error"><?php echo $error['nombre']; ?></div>
  <?php endif; ?>
    <br>
    <label for="correo">Correo electrónico:</label>
  <input type="email" name="correo" placeholder="ejemplo@correo.com" required>
    <?php if (isset($error['correo'])): ?>
    <p class="error"><?php echo $error['correo']; ?></p>
    <?php endif; ?>
    <br>
  <input type="submit" name="enviar" value="Enviar">
</form>
       