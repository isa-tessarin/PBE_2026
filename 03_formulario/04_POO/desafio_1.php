<?php
class Pedido{

    private $cliente;
    private $valorItens;

    public function __construct($cliente,$valorItens = 0){
        $this->cliente = $cliente;
        $this->valor = $valorItens;
    }
    
    public function adicionarItem($valor){
        $this->valorItens += $valor;
    }
    
    public function getTotal(){
        return $this->valorItens;
    }

    public function ExibirPedido(){
        echo "Cliente: $this->cliente <br> Total dos Itens: $this->valor <br>";
        echo "-------------------------------- <br>";
    }
}
class NotaFiscal{
    
    private $totalPedido;
    private $imposto;
    private $totalPagar;
    
    public function __construct($totalPedido,$imposto = (10/100)){
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }
    
    public function calcularTotal(){
        $this->totalPagar = $this->totalPedido + ($this->totalPedido * $this->imposto);
    }

    public function ExibirNota(){
        echo "Subtotal: R$ $this->totalPedido <br> Imposto aplicado: $this->imposto % <br> Total: $this->totalPagar";
        echo " <br> -------------------------------- <br>";
    }
}
$pedido = new Pedido("Isadora",80);
$pedido->adicionarItem(30);
$pedido->adicionarItem(27);
echo $pedido->ExibirPedido();

$notaFiscal = new NotaFiscal($pedido->getTotal(), 8);
$notaFiscal->calcularTotal();
$notaFiscal->ExibirNota();

?>