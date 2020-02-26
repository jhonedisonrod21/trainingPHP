<?php

    $dcHeroes = array("superman","batman","linterna","detective marciano");
    // sort($array) ordena el arreglo por orden alfabetico o numerico

    array_push($dcHeroes,"flash"); // agrega uno al final
    array_pop($dcHeroes);// elimina el ultimo
    unset($dcHeroes[1]);// elimina uno en especifico

    array_rand($dcHeroes);//regresa un numero aleatorio de los index del array

    array_reverse($dcHeroes);//    retorna un nuevo array volcado

    array_search("busqueda",$dcHeroes); //retorna el indice o false si no existe

    count($dcHeroes); // contar la cantidad de elementos del array

    sizeof($dcHeroes); //count

    var_dump($dcHeroes); //estructura e infoe¿rmacion del objeto

?>
