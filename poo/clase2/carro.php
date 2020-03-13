<?php



class Carro {
    //atributos
    public $color ;
    public $modelo;
    public $marca;
    public $velocidadMax;
    public $potencia;
    public $placa;

    //--CONSTRUCTOR------

    public function __construct($color,$modelo,$marca,$velocidadMax,$potencia){
        $this->color = $color;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->velocidadMax =$velocidadMax;
        $this->potencia = $potencia;
    }


    //metodos
    public function get_color(){
        return $this->$color;
    }
    public function setColor($newColor){
        $this->$color = $newColor;
    }
    public function acelerar(){
        $this->$velocidadMax ++;
    }
    public function frenar(){
        $this->$velocidadMax --;
    }
}
