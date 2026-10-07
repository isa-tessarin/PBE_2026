<?php
class Produto{

    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome,$preco,$estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade){
        if($quantidade <= $this->estoque){
            $this->estoque = $this->estoque - $quantidade;
            echo "A venda é de $quantidade <br>";
        }else{
            echo "O estoque é insuficiente!";
        }
    }

    public function reajustarPreco($percentual){
        $this->preco = $this->preco + ($this->preco * $percentual / 100);
    }

    function exibirInfo(){
        echo "O nome do Produto é $this->nome <br> O preço é de $this->preco,00 <br> O estoque é de $this->estoque";
    }

}

$produto = new Produto("Teclado Gamer", 250, 10);
$produto->vender(2);
$produto->reajustarPreco(10);
$produto->exibirInfo();
?>