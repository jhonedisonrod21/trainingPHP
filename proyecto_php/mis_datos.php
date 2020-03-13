<?php require_once 'includes/cabecera.php'?>
<?php require_once 'includes/redirect.php'?>
<?php require_once 'includes/lateral.php'?>
<?php include_once 'includes/conexion.php'?>
<?php require_once 'includes/helpers.php'?>
<div  id = 'principal'>
    <h1>Mi perfil</h1>
    <br>
    <br>
<form action = 'cambios_usuario.php' method = 'POST'>
    <label for = 'name'>Nombre</label>
    <input type = 'text' name = 'name' id = 'name' value="<?=$_SESSION['usuario']['nombre']?>">
    <?php echo isset( $_SESSION['errores'] )? show_error( $_SESSION['errores'], 'nombre' ) : '';
    ?>
    <label for = 'second_name'>Apellidos</label>
    <input type = 'text' name = 'second_name' id = 'second_name' value="<?=$_SESSION['usuario']['apellidos']?>" >
    <?php echo isset( $_SESSION['errores'] )? show_error( $_SESSION['errores'], 'apellidos' ):''?>
    <label for = 'email'>Correo</label>
    <input type = 'email' name = 'email' id = 'email' value="<?=$_SESSION['usuario']['email']?>" >
    <?php echo isset( $_SESSION['errores'] )? show_error( $_SESSION['errores'], 'email' ):''?>  
    <?php echo isset( $_SESSION['errores'] )? show_error( $_SESSION['errores'], 'pasword' ):''?>
    <input type = 'submit' name = 'submit' value = 'Guardar Cambios'>
</form>
</div>
<?php require_once 'includes/footer.php'?>