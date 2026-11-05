<?php
class Aluno{

    private $nome;
    private $turma;
    private $nota1;
    private $nota2;
    private $nota3;
    private $faltas;

    public function __construct($nome, $turma,$nota1,$nota2,$nota3,$faltas){
        $this->nome = $nome;
        $this->turma = $turma;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->faltas = $faltas;
    }

    public function getcalcularMedia(){
        return ($this->nota1 + $this->nota2 + $this->nota3)/3;
    }

    public function getcalcularfrequencia(){
        $totalAulas = 80;
        return ($totalAulas - $this->faltas)/$totalAulas * 100;
    }

    public function getverificarSituacao(){
        return "A média é $this->getcalcularMedia <br> Sua Frequência é de $this->getcalcularfrequencia%";
    }
    
}