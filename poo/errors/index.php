<?php
try {
    if(isset($_GET['manolo'])){
        echo 'wsfasfsdfdf';
    }else{
        throw new Exception('ahhhh perro traes el omnitrix');
    }    
} catch (\Throwable $th) {
   echo 'error:  '.$th->getMessage();
}finally{
    echo 'eooooo';
}


