<?php
class Pedido{

    public $numero;
    public $cliente;
    public $valor;
    public $status;

    function adicionar($valor){
        if($this->status == "Aguardando");
            $this->valor = $this->valor + $valor;
    }else{
        echo "Não é possivel adicionar itens.
        O pedido está $this->status";
    }

    function cancelar(){
        $this->status = "Cancelado";
        echo "Staus alterado para $this->status";
    }

    function finalizar(){
        $this->status = "Finalizado";
        echo "Status alterado para $this->status";
    }

    function exibirResumo(){
        echo "Número: $this->numero <br>";
        echo "Cliente: $this->cliente <br>";
        echo "Valor: $this->valor <br>";
        echo "Status: $this->status <br>";
    }
}
$pedido1 = new Pedido();

$pedido1 = adicionar(10);
$pedido1 = finalizar();
$pedido1 = exibirResumo();

$pedido2 = new Pedido();

$pedido2 = adicionar(10);
$pedido2 = cancelar();
?>