<?php

    $numeros = array(1,2,3,4,5,6,7,8);
    $list = '<table style="width:100%" >';
    //table table tr fila th columna o celda
    foreach ($numeros as $i) {
        $list .= '<tr style = " border-color: #000000; border:30px"> <th>'.$i.'</th></tr>';
    }
    $list .= '</table>';
    echo $list;
    echo '<hr>';
    $invertedList = array_reverse($numeros);

    $list = '<table style="width:100%" >';
    //table table tr fila th columna o celda
    foreach ($invertedList as $i) {
        $list .= '<tr style = " border-color: #000000; border:30px"> <th>'.$i.'</th></tr>';
    }
    $list .= '</table>';
    echo $list;
    echo '<hr>';

    echo "<p> bueno la longitud el erray es ".count($numeros)."</p>";

    $busqueda = array_search(3,$numeros);

    echo "<p> el resultado de buscar 3 fue : ".$busqueda."</p>"



?>