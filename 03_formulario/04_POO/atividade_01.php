<?php
class Celular{
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;


    function ligar() {
    echo "O Celular foi ligado <br>";
    }

    function desligar(){
    echo "O Celular foi desligado <br>";
    }

   function usar($consumir){
    $this->bateria = $this->bateria - $consumir;
    if($this->bateria < 0){
        $this->bateria = 0;
        }
    echo "A bateria foi consumida em $consumir <br>";
    echo "Sobrando um total de $this->bateria <br>";
    }

   function carregar($carga){
    $this->bateria = $this->bateria + $carga;
    if($this->bateria > 100){
        $this->bateria = 100;
        }
        echo "A bateria foi Carregada em $carga <br>";
        echo "Aumentando a bateria em $this->bateria <br>";
   }
}

$celular1 = new Celular();

$celular1->marca = "Samsung";
$celular1->modelo = "Galaxy S";
$celular1->cor = "preto";
$celular1->bateria = 50;
$celular1->ligado = true;

echo "Marca: $celular1->marca <br>";
echo "Modelo: $celular1->modelo <br>";
echo "Cor: $celular1->cor <br>";
echo "Bateria: $celular1->bateria <br>";
echo "Ligado: $celular1->ligado <br>";

$celular1->ligar();
$celular1->carregar(9);
$celular1->carregar(8);
$celular1->usar(34);
$celular1->usar(8);
$celular1->desligar();

$celular2 = new Celular();

$celular2->marca = "Apple";
$celular2->modelo = "iPad";
$celular2->cor = "laranja";
$celular2->bateria = 20;
$celular2->ligado = false;

echo "Marca: $celular2->marca <br>";
echo "Modelo: $celular2->modelo <br>";
echo "Cor: $celular2->cor <br>";
echo "Bateria: $celular2->bateria <br>";
echo "Ligado: $celular2->ligado <br>";

$celular2->ligar();
$celular2->carregar(50);
$celular2->usar(34);
$celular2->desligar();
?>