<?php
class Pessoa{

    private $nome;
    private $idade;
    private $cidade;
    private $telefone;

    public function __construct($nome,$idade,$cidade,$telefone){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
        $this->telefone = $telefone;
    }

    public function definirEndereco($cidade){
        echo "Sua cidade é this->cidade <br>";
    }

    public function definirTelefone($telefone){
        echo "Seu telefone é this->telefone <br>";
    }

    public function aniversario(){
        $this->idade = $this->idade + 1;
    }

    public function exibirPerfil(){
        echo "Nome: $this->nome <br> Idade: $this->idade <br> Cidade: $this->cidade <br> Telefone: $this->telefone";
    }
}
$pessoa = new Pessoa("Isadora",16,"Tambaú","9999999999");
echo $pessoa->exibirPerfil();
?>