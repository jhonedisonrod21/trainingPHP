<?php
session_start();
include_once 'includes/conexion.php';

if ( $_POST['submit'] ) {
    $nombre = isset($_POST['name']) ? $_POST['name'] : false;
    $apellidos = isset( $_POST['second_name']) ?$_POST['second_name'] :false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password']:false;
    // array de errores
    $errores = array();
    //validando la informacion antes de guardarv en la base de datos
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match($nombre,'/[0,9]/')) {
        $nombre_validate = true;
    }else{
        $nombre_validate = false;
        $errores['nombre'] = 'nombre no valido';
    }

    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match($apellidos,'/[0,9]/')) {
        $apellidos_validate = true;
    }else{
        $apellidos_validate = false;
        $errores['apellidos'] = 'apellido no valido';
    }
   
    if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_validate = true;
    }else{
        $email_validate = false;
        $errores['email'] = 'email no valido';
    }

    if (!empty($password)) {
        $pasword_validate = true;
    }else{
        $pasword_validate = false;
        $errores['pasword'] = 'contraseña vacia';
    }
    $guardar_usuario = false;
    if(count($errores) == 0){
        //insertar el usuario en la base de datos
        $guardar_usuario = true;
        //  encriptar la contraseña---
        $secure_pasword = password_hash($password,PASSWORD_BCRYPT);
        // guardar el usuario
        $sql ="INSERT INTO usuarios(nombre, apellidos, email, password, fecha) VALUES ('$nombre','$apellidos', '$email', '$secure_pasword', current_date);";
        $save = pg_query($connection,$sql);

        if($save){
            $_SESSION['completed'] = 'el Registro se ha realizado con exito'; 
            echo"ok" ;          
        }else{
            $_SESSION['errores']['register'] = "hubo un problema durante el registro porfavor intente mas tarde";
            echo "error";
        }

    }else{
        $_SESSION['errores'] = $errores;    
    }
    header('location:index.php');  
}

?>