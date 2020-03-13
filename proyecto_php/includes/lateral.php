<?php include_once 'includes/helpers.php'?>
<?php if(!isset($_SESSION)){session_start();}?>
<aside id="sidebar">
        <?php  if(isset($_SESSION['usuario'])):?>
            <div class = "bloque">
                <h3>Bienvenido <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']?></h3>
                <!-- botones para acciones del usuario -->
                <a href="crear_entradas.php" class="boton boton-verde">Crear Entrada</a>
                <a href="crear_categoria.php" class="boton boton-verde">Crear Categoria</a>
                <a href="mis_datos.php" class="boton boton-naranja">Mi pefil</a>
                <a href="logout.php" class="boton boton-rojo">Cerrar Sesión</a>
            </div>
        <?php  endif;  ?>

        <?php  if(!isset($_SESSION['usuario'])):?>
        <div id="login" class= "bloque">            
            <h3>Identificate</h3>
            <form action="login.php " method="POST">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Entrar">
            </form>
            <?php  if(isset($_SESSION['errores']['login'])):?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['errores']['login'] ?>
                </div>
            <?php  endif;?>
        </div>

        <div id="register" class= "bloque">
            <h3>Registrate</h3>   
            <?php  if(isset($_SESSION['completed'])):?>
                <div class="alerta">
                    <p><?= $_SESSION['completed'];?></p>
                </div> 
            <?php elseif(isset($_SESSION['errors'])):?>
                <div>
                    <p><?= var_dump($_SESSION['errors']['register']);?></p>
                </div>                           
            <?php endif;?>         
            <form action="register.php" method="POST">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
                <?php echo isset($_SESSION['errores'])? show_error($_SESSION['errores'],'nombre') : ''; ?>                
                <label for="second_name">Apellidos</label>
                <input type="text" name="second_name" id="second_name">
                <?php echo isset($_SESSION['errores'])? show_error($_SESSION['errores'],'apellidos'):''?>
                <label for="email">Correo</label>
                <input type="email" name="email" id="email">
                <?php echo isset($_SESSION['errores'])? show_error($_SESSION['errores'],'email'):''?>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">
                <?php echo isset($_SESSION['errores'])? show_error($_SESSION['errores'],'pasword'):''?>
                <input type="submit" name ='submit' value="Registrarse">
            </form>
            <?php  remove_login_session_errors() ?>
        </div>
        <?php  endif;  ?>
    </aside>  