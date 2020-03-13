<?php require_once 'includes/cabecera.php'?>

<!--barra lateral-->
<?php require_once 'includes/lateral.php'?> 
<?php require_once 'includes/helpers.php'?> 
<?php require_once 'includes/conexion.php'?> 
<!--caja principal-->
<div id="principal">
    <h1>Ultimas entradas</h1>
    <?php  $articulos = get_lastest_inputs($connection)?>
    <?php  while($articulo = pg_fetch_assoc($articulos)) :?>
        <article>
            <a href="">
                <h2><?=$articulo['titulo']?></h2>
                <span class="fecha"><?=$articulo['categoria']?> | <?=$articulo['fecha']?></span>
                <p>
                    <?= substr($articulo['descripcion'],0,180).'...'?>
                </p>
                
            </a>
        </article>
    <?php  endwhile; ?>
    <div id="ver-todas">
        <a href="">Ver todas las entradas</a>
    </div>

<?php require_once 'includes/footer.php'?> 
