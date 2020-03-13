<?php

class Persona {
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct( $nombre, $edad, $ciudad ) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;    
    }

    public function __toString(){
        return "uribe hpta";
    }

}

$persona = new Persona('jhon','20','tunja');
echo $persona;




?>