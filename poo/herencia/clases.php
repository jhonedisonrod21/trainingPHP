<?php

class Persona{
    public $nombre;
    public $apellidos;
    public $estatura;

    public function __contruct($nombre,$apellidos,$estatura){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->estatura = $estatura;
    }

    public function get_nombre(){
        return $this->nombre;
    }
    public function get_apellidos(){
        return $this->nombre;
    }
    public function get_estatura(){
        return $this->nombre;
    }    
    public function hablar(){
        return "hablando";
    }

}


class Informatico extends Persona{
    public function programar(){
        return "programando";
    }
}