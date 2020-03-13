<?php
session_start();
include_once 'includes/conexion.php';
if(isset($_SESSION['usuario'])){
    echo var_dump($_SESSION['usuario']);    
}


if ( $_POST['submit'] ) {
    $nombre = isset($_POST['name']) ? $_POST['name'] : false;
    $apellidos = isset( $_POST['second_name']) ?$_POST['second_name'] :false;
    $email = isset($_POST['email']) ? $_POST['email'] : false; 
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

    $guardar_usuario = false;
    echo var_dump($errores);
    if(count($errores) == 0){
        //insertar el usuario en la base de datos
        $guardar_usuario = true;
        //  encriptar la contraseña---
        $secure_pasword = password_hash($password,PASSWORD_BCRYPT);
        // guardar el usuario
        $id = $_SESSION['usuario']['id'];
        $sql ="UPDATE usuarios	SET nombre='$nombre', apellidos='$apellidos', email='$email' WHERE id = '$id';";
        $save = pg_query($connection,$sql);
        if($save){
            $_SESSION['saved'] = 'el guardado se ha realizado con exito';            
            $_SESSION['usuario']['nombre']=$nombre;
            $_SESSION['usuario']['apellidos']=$apellidos;
            $_SESSION['usuario']['email']=$email;           
        }else{
            $_SESSION['errores']['save'] = "hubo un problema durante el cambio";
            echo "error";
        }
    }else{
        $_SESSION['errores'] = $errores; 
           
    }
    
    header('location:index.php');  
}



?>