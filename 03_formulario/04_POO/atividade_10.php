<?php
class Carro{

    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo,$consumo = 10,$tanque = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque;
    }
    
    public function abastecer($litros){
        if($litros <= 0){
            echo "ERRO!, só pode abastecer com números positivos";
        }else{
        $litros = $this->tanque + $litros;
        echo "<br> Seus carro foi abastecido! <br>";
        echo "Foram abastecidos $litros litros! <br>";
        }
    }

    public function dirigir($km){
        $this->consumo = $km/($km/$this->tanque);
        if($this->tanque <= 0){
            echo "ERRO! O $this->modelo não poderá andar!";
        }
    }
    
    public function exibirInfo(){
        echo "O modelo do carro é $this->modelo <br> O seu consumo foi de $this->consumo Km <br> Seus litros disponiveis são: $this->tanque litros <br>";
        echo "-------------------------------------------------------- <br>";
    }
}
$carro1 = new Carro("Civic",12,20);
$carro1->exibirInfo();
$carro1->dirigir(10);
$carro1->exibirInfo();
$carro1->abastecer(-2);
?>