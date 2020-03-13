<?php
if ( !isset( $_SESSION ) ) {
    session_start();
}
include_once 'includes/conexion.php';

//   db_connection
if ( isset( $_POST ) ) {


    //-----borrar la sesion antigua------------------------
    if(isset($_SESSION['errores']['login'])){
        session_unset($_SESSION['errores']['login']);
    }


    $user_mail = $_POST['email'];
    $user_password = ''.$_POST['password'].'';

    //VERIFICAR
    $sql = "SELECT * FROM usuarios WHERE email ='$user_mail'";
    $login = pg_query($connection, $sql);

    if ( $login && pg_num_rows( $login ) == 1 ) {
        //cifrar la contra de nuevo   
        $user =  pg_fetch_array($login);   
        $db_pasword = $user['password'];        
        $check = password_verify($_POST['password'],$db_pasword);  
        if ( $check ) {
            // clear unsa sesion para saber que esta loguedo
            $_SESSION['usuario']= $user;
            
        } else {
            $_SESSION['errores']['login'] = 'error al iniciar sesion';
        }
        //verificar la contraseña
    } else {
        $_SESSION['errores']['login'] = 'error al iniciar sesion';
    }

}

header('location:index.php');
?>