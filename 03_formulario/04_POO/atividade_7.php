<?php
class ContaBancaria{
    
    public $titular;
    public $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    function depositar($valor){
        $this->saldo = $this->saldo + $valor;
    }

    function sacar($valor){
        $this->saldo = $this->saldo - $valor;
    }

    function ExibirSaldo(){
        echo " Titular: $this->titular <br> Saldo: $this->saldo";
    }
}
$conta1 = new ContaBancaria("Isadora",1000);
$conta1-> depositar(100);
$conta1-> ExibirSaldo();
?>