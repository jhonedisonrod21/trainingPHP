<?php 
//poo clases

class Carro {
    //atributos
    public $color = 'rojo';
    public $modelo='lamborginni';
    public $marca='urus';
    public $velocidadMax=300;
    public $potencia=300;
    public $placa = 'chdt277v3';
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


//instanciacion

$carro = new Carro();

echo $carro -> velocidadMax.'<br>';
$carro ->setColor('amarillo');
echo $carro->get_color();
$carr ->acelerar();

?>