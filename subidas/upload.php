<?php       
    $archivo = $_FILES['archivo'];
    $name = $archivo['name'];
    $type = $archivo['type'];
    $tmp_name = $archivo['tmp_name'];

    echo 'tipo: '.$type.'<hr>';

    if($type == 'image/jpg' || $type == 'image/png' || $type == 'image/jpeg' || $type == 'image/gif' ){

        if(!is_dir('./images')){
            try {
                mkdir('./images',0777);
            } catch (\Throwable $th) {
               echo $th;
            }            
        }else{
            echo "la carpeta si existe";
        }    
        
    }else{
        echo "no es del tipo especificado";
    }
    move_uploaded_file($tmp_name,'images/'.$name) or die(); 
    header('Refresh:3; URL = index.php');
    echo '<h1>Imagen subida correctamente</h1>';

    echo $name.'<br/>';
    echo $type.'<br/>';
    echo $tmp_name.'<br/>';
    die();
?>