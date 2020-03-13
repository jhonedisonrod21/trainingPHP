<?php include_once 'helpers.php'?>
<?php include_once 'conexion.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi blog</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<!--cabecera-->
<header id="cabecera">
    <div id= "logo">
        <a href="index.php">
            Blog de videojuegos
        </a>
    </div>
    <!--menu-->   

    <nav id="menu">
        <ul>
            <?php $categorias = get_categories($connection);?>
            <?php while($categoria = pg_fetch_assoc($categorias)):?>
                <li>
                    <a href="categoria.php?id=<?=$categoria['id']?>"><?= $categoria['nombre']?></a>
                </li>
            <?php  endwhile; ?>
            <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
        </ul>
    </nav>
    <div class="clearfix"></div>
</header>
<div id ="contenedor">
