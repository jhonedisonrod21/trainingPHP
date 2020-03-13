<?php 
    session_start();
    if(!isset($_SESSION['counter'])){
        $_SESSION['counter']=0;
    }    
    if(isset($_GET['opcion'])){
        switch ($_GET['opcion']) {
            case '1':
                $_SESSION['counter']++;
                break;
            case '0':
                $_SESSION['counter']--;
                break;
            default:
                echo "ahhhhhh";
                break;
        }
    }
    $counter = $_SESSION['counter'];
    echo "<h1>El valor del contador es:  $counter</h1>"
?>