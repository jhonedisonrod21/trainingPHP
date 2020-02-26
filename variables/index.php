<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variabless</title>
</head>
<body>
    <?php
        $variable = "variable de ejemplo";
        $edad = 21;
        $nombre = "jhon";
        $vivo = true;
        echo '<h1>'.$variable.'</h1>';//asi se llama una variable
        $edad = 12312;
        $array[] = "";
        /*
        tipos de datos 
        -int etc 
        -Array
        -objetos*/
        echo '<br>';
        echo gettype($nombre);//ver el tipo de dato
        var_dump($edad);
        //constantes
        //no son modificables
        echo '<br>';
        define('nombre','manolo');
        echo nombre;
        echo '<br>'; 
        //ctes predefinidas
        echo PHP_VERSION;
        echo '<br>';
        echo PHP_OS;        
        echo '<br>';
        echo PHP_EXTENSION_DIR;        
        echo '<br>';
 
    ?>
</body>
</html>