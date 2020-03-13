<?php
    session_start();    
    $Host = "localhost";
    $port = "5432";
    $db_name = "php_test";
    $user = "jhon";
    $password = "jerm1998";    
    $connection = pg_connect("host=$Host port=$port dbname=$db_name user=$user password=$password");
    pg_query($connection,"SET NAMES 'utf-8'");   
?>