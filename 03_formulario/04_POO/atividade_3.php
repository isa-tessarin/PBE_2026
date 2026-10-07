<?php
class Aula{
    public $disciplina;
    public $professor;
    public $duracao;
    public $numero_sala;
    public $bloco;


    function exibirInformações() {
        echo "Disciplina: $this->disciplina <br>";
        echo "Professor: $this->professor <br>";
        echo "Duração: $this->duracao <br>";
        echo "Numero da sala: $this->numero_sala <br>";
        echo "Bloco: $this->bloco <br>";
    }

    function trocarProfessor($nome_professor){
        $this->professor = $nome_professor ;
        echo "O $this->professor foi trocado pelo $nome_professor <br>";
    }

   function alterarLocal($novo_numero_sala,$novo_bloco){
        $this->numero_sala = $novo_numero_sala ."<br>";
        $this->bloco = $novo_bloco ."<br>";
        echo "O novo local é $this->bloco $this->numero_sala <br>";
    }
}

$sala1 = new Aula();

$sala1->disciplina = "Português";
$sala1->professor = "Michele";
$sala1->duracao = 4;
$sala1->numero_sala = 2;
$sala1->bloco = "Anexo";

$sala1->exibirInformações();
$sala1->trocarProfessor("Leonardo");
$sala1->alterarLocal("B",1);
echo "<hr>";
$sala2 = new Aula();

$sala2->disciplina = "Back-and";
$sala2->professor = "Leonardo";
$sala2->duracao = 10;
$sala2->numero_sala = 2;
$sala2->bloco = "Senai";

$sala2->exibirInformações();
$sala2->trocarProfessor("Gabriel");
$sala2->alterarLocal("A",2);


?>