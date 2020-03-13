<?php
/*
# 1: se debe hacer una funcion para validar un email con filter var
# 2: debe recojer una texto por get y valiodarla y mostrat el resultado
*/
?>
<?php
    function validate($text){
        if(filter_var($text,FILTER_VALIDATE_EMAIL)){
            echo "<h1>Todo bien todo correcto</h1>";
        }else{
            echo "<h1>Aprenda a escribir correos</h1>";
        }
    }
    
    if(isset($_GET['correo']) && !empty($_GET['correo'])){
        validate($_GET['correo']);
    }else{
        echo "pofavo pone uno correo";
    }
?>