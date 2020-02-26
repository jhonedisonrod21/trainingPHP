<?php 
    /* colecciones de datos*/
    $dc = array('batman','superman','linterna');
    //echo var_dump($dc);    
    echo '<h1>'.$dc[0].'</h1>';

    echo '<h1>listado de herose de Dc con for</h1>';
    $lista = '<ul>';
    for ($i=0; $i < count($dc); $i++) { 
        $lista .= '<li>'.$dc[$i].'</li>';
    }
    $lista .= '</ul>';
    echo $lista;

    echo '<h1>listado de herose de Dc con foreach</h1>';
    $lista = '<ul>';
    foreach ($dc as $hero) {
        $lista .= '<li>'.$hero.'</li>';
    }
    $lista .= '</ul>';
    echo $lista;

    $jhon = array(
        'nombres' => "Jhon Edison",
        'apellodos' => "Rodriguez maldonado",
        'cc' => "1056805318",
        'edad' => "21",
        'genero' => 'M',
        'pasatiempo' => "ninguno"
    );
    $contactos = array(array("nombre"=>"luis"),array("nombre"=>"andres"));// se puede recorrer con un foreach
    
    echo '<hr/>';
    echo '<h1>'.$jhon['nombres'].'</h1>';
    echo '<h1>'.$jhon['apellidos'].'</h1>';
    echo '<h1>'.$jhon['cc'].'</h1>';
    echo '<h1>'.$jhon['genero'].'</h1>';
    echo '<h1>'.$jhon['edad'].'</h1>';
    echo '<h1>'.$jhon['apellidos'].'</h1>';

    echo '<h1>'.$contactos[0]['nombre'].'</h1>';

    // funciones de los arrays

    
?>