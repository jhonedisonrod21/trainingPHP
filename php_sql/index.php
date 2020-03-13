<?php
    $connection = pg_connect("host=localhost port=5432 dbname=php_test user=jhon password=jerm1998");
    $status = pg_connection_status($connection);
    if($status == PGSQL_CONNECTION_OK){
        echo "todo en orden <br>";
    }else{
        echo "paila socito";
    }
    $res = pg_prepare($connection,"all_querry",'SELECT * FROM notas WHERE titulo = $1');
    $res = pg_execute($connection,"all_querry", array("nota1")) or die("joderrrr");
    //----------consultar---------------
    $result = pg_query($connection,'SELECT * FROM notas');   
    $notas = pg_fetch_all($result); 
    foreach ($notas as $nota) {
        echo "id: ".$nota[id].' titulo: '.$nota['titulo'].' descripcion: '.$nota['descripcion'].' color: '.$nota['color']."<br>";
    }  
    //---------------insertar 
    $sql = "INSERT INTO notas(titulo, descripcion, color)
	VALUES ('nota3324234','descripcion de la nota 33','naranja')";
    $insert = pg_query($connection,$sql);
    if($insert){
        echo "se guardo correctamente";
    }else{
        echo pg_last_error($connection);
    }

?>