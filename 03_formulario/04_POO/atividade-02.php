<?php
class Conta{
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

    function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "O saldo aumento para $this->saldo <br>";
    }
    function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        echo "O saldo resultou em $this->saldo <br>";
    }
    function consultarSalto(){
        echo "O valor do saldo é de $this->saldo <br>";
    }
}
$conta1 = new Conta();

$conta1->titular = "Isadora";
$conta1->numero = 4088;
$conta1->saldo = 1000;
$conta1->tipo = "Corrente";

echo "Titular: $celular1->marca <br>";
echo "Modelo: $celular1->modelo <br>";
echo "Cor: $celular1->cor <br>";
echo "Bateria: $celular1->bateria <br>";


?>