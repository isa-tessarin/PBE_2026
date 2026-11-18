<?php
require_once "Aluno.php";
require_once "matricula.php";

$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$plano = $_POST['plano'];
$meses = $_POST['meses'];
$modalidade = $_POST['modalidades'] ?? [];
// ?? -> faz com que se a lista/array não existir, criar uma vazia 

$aluno = new Aluno($nome, $peso, $altura);
$matricula = new Matricula($aluno, $plano, $meses, $modalidade);
require_once "view_relatorio.php";