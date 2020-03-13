<?php
    if (isset($_POST)) {
        include_once 'includes/conexion.php';
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:false;
        $errors = array();
        $nombre_ok = false;
        if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
            $nombre_ok = true;
        }else{
            $errors['nombre'] = 'hubo un error al intentar registrar ese nombre';
        }

        if($nombre_ok && count($errors) == 0){// se hace la consulta
            $sql_cat = "INSERT INTO categorias (nombre) VALUES ('$nombre');" or die("sql error");           
            $request = pg_query($connection,$sql_cat);
            echo 'ok';
        }
    }

    header('location:index.php')


?>