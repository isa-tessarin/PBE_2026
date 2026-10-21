<?php
class Turma{

    private $nome;
    private $professor;
    private $qtdAlunos;
    private $capacidade;

    public function __construct($nome,$professor,$capacidade,$qtdAlunos = 0){
        $this->nome = $nome;
        $this->professor = $professor;
        $this->qtdAlunos = $qtdAlunos;
        $this->capacidade = $capacidade;
    }

    public function adicionarAluno(){
        $this->qtdAlunos = $this->qtdAlunos + 1;
    }

    public function removerAluno(){
        $this->qtdAlunos = $this->qtdAlunos - 1;
    }

    public function exibirTurma(){
        echo "Nome: $this->nome <br> Professor: $this->professor <br> Quantidade de alunos: $this->qtdAlunos";
    }
}
$turma = new Turma("Isadora","Leonardo",20,32);
echo $turma->adicionarAluno(1);
echo $turma->removerAluno(2);
echo $turma->exibirTurma();
?>