<?php
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$IMC = ($altura * $altura)/$peso;

require_once "view_relatorio.php";
?>