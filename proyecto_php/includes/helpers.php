<?php

require_once 'conexion.php';
if ( !isset( $_SESSION ) ) {
    session_start();
}

function  show_error($error,$campo){
    $alert = '';
    if(isset($error[$campo]) && !empty($campo)){
        $alert = "<div class ='alerta alerta-error'>".$error[$campo]."</div>";
    }
    return $alert;
}

function remove_login_session_errors(){
    $_SESSION['errores'] = null;    
    session_unset($_SESSION['errores']); 
    if (isset($_SESSION['completed'])) {
        $_SESSION['completed'] = null;
        session_unset($_SESSION['completed']);
    }
    $borrado = session_unset($_SESSION['completed']);
    return $borrado;
}


function remove_errors(){
    $_SESSION['errores'] = null;    
    session_unset($_SESSION['errores']); 
}

function get_categories ($connection){
    $result = false;  
    $sql = 'SELECT * FROM categorias';
    $categories = pg_query($connection, $sql);
    $count = pg_num_rows($categories);
    if($categories && $count >= 1 ){
        $result = $categories;
    }
    return $result;
}

function get_lastest_inputs($connection){
    $result = false;
    $sql = 'SELECT e.* ,c.nombre AS categoria FROM entradas e INNER JOIN categorias c on e.categoria_id = c.id ORDER BY e.id DESC LIMIT 4;';
    $lastest = pg_query($connection,$sql);
    $count = pg_num_rows($lastest);
    if($lastest && $count >= 1 ){
        $result = $lastest;
    }
    return $result;
}
?>