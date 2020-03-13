<?php require_once 'includes/cabecera.php'?>
<?php require_once 'includes/redirect.php'?> 
<?php require_once 'includes/lateral.php'?> 
<?php include_once 'includes/conexion.php'?>
<?php require_once 'includes/helpers.php'?> 
<?php session_start(); ?>
    <div  id="principal">
    <form action="guardar_entrada.php" method="POST">
        <p class="nota" id="nota">
            Añade nuevas entradas al blog para que los usuarios puedan verlas<br>
        </p>
        <br>
        <br> 
        <label for="tilulo">Titulo</label>
        <input type="text" name="tilulo" id="">
        <?php  if(isset($_SESSION['errores']['titulo'])):?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['titulo'] ?>
            </div>
        <?php  endif;?>
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" cols="100" rows="10"></textarea>        
        <?php  if(isset($_SESSION['errores']['descripcion'])):?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['descripcion'] ?>
            </div>
        <?php  endif;?>
        <select name="categoria">
            <?php $categorias = get_categories($connection) ?>
            <?php while($categoria = pg_fetch_assoc($categorias)): ?>
                <option  value="<?=$categoria[id]?>"><?=$categoria[nombre]?></option>
            <?php endwhile; ?>
        </select>
        <input  type="submit" value="Guardar">
    </form>
    </div>
<?php require_once 'includes/footer.php'?> 
<?php remove_errors(); ?>