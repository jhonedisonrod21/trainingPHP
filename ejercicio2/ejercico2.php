<?php
    //programa que anñada valores mientras qeu su longitud sea de 120
    $array= array();
    $str = "";
    $int = 0;
    $bool = true;

    function show($value){
        switch (gettype($value)) {
            case 'boolean':
                echo "el dato es de tipo boolean <br>";
                break;
            case 'string':
                echo "el dato es de tipo string <br>";
                break;
            case 'array':
                echo "el dato es de tipo array <br>";
            break;
            case 'integer':
                echo "el dato es de tipo integer <br>";
                break;
            default:
                echo "el dato es de tipo desconocido <br>";
                break;
        }
    }

    show($array);
    show($str);
    show($int);
    show($bool);
?>
