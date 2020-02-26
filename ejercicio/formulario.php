<?php
    if(isset($_POST['Nombre'])&&isset($_POST['Apellidos'])&&isset($_POST['Telefono'])){
        $nombre = $_POST['Nombre'];
        $apellidos = $_POST['Apellidos'];
        $telefono = $_POST['Telefono'];
        $date = $_POST['Date'];
        echo "<p> Nombre : $nombre ".'<br>'."Apellidos : $apellidos".'<br>'."Telefono : $telefono".'<br>'."Fecha de Nacimiento : $date".'</p>';
    }else{
        echo '<h1>fomulario incompleto</h1>';
    }    
?>