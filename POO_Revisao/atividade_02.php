<?php
class Carro{

    private $modelo;
    private $velocidade;

    public function __construct($modelo,$velocidade = 0){
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function acelerar(){
        $this->velocidade += 10;
    }

    public function freiar(){
        $this->velocidade -= 10;
    }

    public function verVelocidade(){
        echo "O carro $this->modelo está atualmente com a velocidade de $this->velocidade Km";
    }
}
$carro = new Carro ("Honda Civic",10);
$carro->verVelocidade();
?>