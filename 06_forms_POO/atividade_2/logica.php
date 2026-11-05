<?php
require_once "Aluno.php";
$nome = $_POST['nome'];
$turma = $_POST['turma'];
$nota1 = $_POST['nota_1'];
$nota2 = $_POST['nota_2'];
$nota3 = $_POST['nota_3'];
$faltas = $_POST['falta'];

$aluno = new Aluno($nome,$turma,$nota1,$nota2,$nota3,$faltas);

if($aluno->getcalcularMedia() >= 7){
    return "Aprovado";
}elseif($aluno->getcalcularMedia() >= 5){
    return "Recuperação";
}else{
    return "Reprovado";
}

require_once "view_relatorio.php";