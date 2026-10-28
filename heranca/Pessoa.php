<?php
class Pessoa{

    protected $nome;
    protected $email;
    
    public function __construct($nome,$email){
        $this->nome = $nome;
        $this->email = $email;
    }

    //Métodp que busca e retorna o nome do projeto
    public function getNome(){
        return $this->nome;
    }

    //Método que atualiza o nome
    public function setNome($nome){
        $this->nome = $nome;
    }

    //metodo que busca e retorna o email do objeto
    public function getEmail(){
        return $this->email;
    }

    //metodo para atualizar email
    public function setEmail($email){
        $this->email = $email;
    }

    //metodo para exibir todos os dados
    //normalmente chamado de toString()
    public function exibirDadosPessoa(){
        echo "Nome: $this->nome <br> Email: $this->email <br>";
    }
}
?>