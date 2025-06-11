<!-- Registro login -->
<form action="registroLogin.php" method="post">

    <label>Usuario</label>
    <input type="text" name="usuario" placeholder="Introduce tu usuario" required>
    <?php if (isset($error['usuario'])): ?>
        <div class="error"><?php echo $error['usuario']; ?></div>
    <?php endif; ?>

    <br>

    <label>Contraseña</label>
    <input type="password" name="claveAcceso" required>
    <?php if (isset($error['claveAcceso'])): ?>
        <div class="error"><?php echo $error['claveAcceso']; ?></div>
    <?php endif; ?>

    <br>
    <input type="submit" name="enviar" value="Iniciar sesión">
    <input type="reset" value="Limpiar">

</form>
