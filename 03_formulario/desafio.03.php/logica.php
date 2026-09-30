<?php
$nome_cliente = $_POST['nome_cliente'];
$nome_evento = $_POST['nome_evento'];
$quantidade = $_POST['qtd'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$tipo = $_POST['tipo'];

$preco = 45;

if($tipo == "Meia"){
    $preco = $preco/2;
}

if($quantidade > 10){
    $desconto = $preco * 10/100;
    $preco = $preco - $desconto;
}

$total = $preco*$quantidade;

require_once "view.relatorio.php";

?>