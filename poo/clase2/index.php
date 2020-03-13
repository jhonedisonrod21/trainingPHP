<?php
    require_once 'carro.php';
    $carro = new Carro('rojo','usrus','lamborginni',300,700);
    //__construct($color,$modelo,$marca,$velocidadMax,$potencia)
    echo var_dump($carro);
?>