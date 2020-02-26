<?php
    echo var_dump($_POST);
    echo isset($_POST['titulo']);
    echo isset($_POST['descripcion']);
  if (isset($_POST['titulo'])&&isset($_POST['descripcion'])) {
     echo '<h1>'.$_POST['titulo'].'</h1>';
     echo '<h2>'.$_POST['descripcion'].'</h2>';
  }else{
    echo '<h1>F en el chat</h1>';
  }   
?>
