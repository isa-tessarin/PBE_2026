<?php
class Paciente{

    private $nome;
    private $idade;
    private $peso;
    private $altura;

    public function __construct($nome,$idade,$peso,$altura){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC(){
    $IMC = $this->peso/($this->altura * $this->altura);
    }

    public function classificarIMC(){
        if($IMC < 18.5){
            echo "Baixo da média";
        }elseif($IMC > 18.6 && $IMC < 24.9){
            echo "Normal";
        }elseif($IMC > 25 && $IMC < 29.9){
            echo "Sobrepeso";
        }else{
            echo "Obesidade";
        }
    }

    public function exibir(){
        echo "Nome: $this->nome <br> Idade: $this->idade anos <br> Peso: $this->peso Kg <br> Altura: $this->altura metros <br>";
    }
}
$paciente1 = new Paciente("Isadora",16,82,1.62);
echo $paciente1->exibir();
echo $paciente1->classificarIMC();
?>