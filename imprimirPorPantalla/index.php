<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h1>ejemplo de mostrar por pantalla</h1>
    <?= "esto es un atajo de echo"?> 
    <?php
        // esto es un comentario de una linea
        echo '<h3> listado de los videojuegos/h3>';
        /*
        esto es un comentario de
        bloque
        */
        echo "<ul>"
            ."<li>fifa</li>" 
            ."<li>gta</li>" 
            ."<li>mario</li>"
            ."</ul>";
        echo "<p>Esta es toda la lista de juegos</p>";  
        echo date('d-m-y');
        echo '<br>';
       // echo time().round().pi().rand();
        // gettype
        // is_int(#vaiable)  -> true or false
        $string = "manolo";
        echo strlen($string);
        echo strpos($string,'r');
        echo str_replace("");
        echo strtolower("");// minusculas
        echo strtoupper("")// mayusculas
        
    ?>
</body>
</html>