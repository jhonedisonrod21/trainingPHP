<?php require_once 'includes/cabecera.php'?>
<?php require_once 'includes/redirect.php'?> 
<?php require_once 'includes/lateral.php'?> 
<?php session_start(); ?>
    <div  id="principal">
    <form id="cat_form" action="guardar_categoria.php" method="POST">        
        <p>
            Añade nuevas categorias al blog para que los usuarios puedan usarlas es sus entradas <br>
        </p> 
        <br>
        <br>       
        <label for="nombre">Nombre de la categoria</label>
        <input type="text" name="nombre" id="">
        <input type="submit" value="Guardar">
    </form>
    </div>
<?php require_once 'includes/footer.php'?> 