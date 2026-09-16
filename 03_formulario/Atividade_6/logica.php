<?php
$nome = $_POST['nome'];
$filme = $_POST['filme'];
$ingresso = $_POST['ingressos'];
$tipo = $_POST['tipo'];

$preco = 50;

if($tipo == "Meia"){
    $preco = $preco/2;
}

if($ingresso > 10){
    $desconto = $preco * 10/100;
    $preco = $preco - $desconto;
}

$total = $preco*$ingresso;

require_once "view_relatorio.php";
?>