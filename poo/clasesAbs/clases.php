<?php
abstract class Pc{
    public $estado;

    public function __construct(){
        self::estado;
    }
    abstract public function encender();

    public function apagar(){
        $this->estado = false;
    }
}


class PcAsus{
    public $software;
}