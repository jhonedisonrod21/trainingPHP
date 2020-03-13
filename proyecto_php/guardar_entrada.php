<?php
    if (isset($_POST)) {
        session_start();        
        include_once 'includes/conexion.php';
        $titulo = isset($_POST['tilulo'])? pg_escape_string($_POST['tilulo']):false ;
        $descripcion = isset($_POST['descripcion'])?pg_escape_string($_POST['descripcion']):false ;
        $categoria_id = isset($_POST['categoria']) ? (int)$_POST['categoria']:false ;
        $usuario_id = $_SESSION['usuario']['id'];
        $errors = array();
        $titl_ok = false;
        $desc_ok = false;
        $cat_ok = false;     

        $titl_ok = (!empty($titulo) && !is_numeric($titulo)) ? true:false;
        if(!$titl_ok){$errors['titulo'] = "el titulo no es valido";}
        $desc_ok = (!empty($descripcion) && !is_numeric($descripcion)) ? true:false;
        if(!$desc_ok){$errors['descripcion'] = "la descripcion no es valida";}
        $cat_ok = (!empty($categoria_id) && is_numeric($categoria_id)) ? true:false;
        if(!$desc_ok){$errors['categoria'] = "la categoria no es valida";}       

        if($titl_ok && $desc_ok && $cat_ok && count($errors) == 0){// se hace la consulta
            echo "aaaaaaaa";
            $sql_cat = "INSERT INTO public.entradas(usuario_id, categoria_id, titulo, descripcion, fecha) VALUES ($usuario_id, $categoria_id, '$titulo','$descripcion',current_date);";           
            $request = pg_query($connection,$sql_cat) or die("request error");            
        }else{
            echo "uuuuuu";
            $_SESSION['errores'] = $errors;
            header("location:crear_entradas.php");
            die();
        }
        header('location:index.php');
    }

   
?>