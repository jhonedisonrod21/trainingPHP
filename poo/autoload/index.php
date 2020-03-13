<?php
require_once 'autoload.php';
use clases\Usuario;
use clases\Categoria;
use clases\Entrada;
class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->$usuario =new clases\Usuario();
    }
}

$principal = new Principal();
echo var_dump($principal->usuario);