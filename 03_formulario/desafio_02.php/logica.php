<?php
$nome_cliente = $_POST['nome'];
$produto_1 = $_POST['nome_produto1'];
$preco_1 = $_POST['preco1'];
$qtd_1 = $_POST['qtd1'];

$produto_2 = $_POST['nome_produto2'];
$preco_2 = $_POST['preco2'];
$qtd_2 = $_POST['qtd2'];

$produto_3 = $_POST['nome_produto3'];
$preco_3 = $_POST['preco3'];
$qtd_3 = $_POST['qtd3'];

$Produtos = [
    ["nome" => $produto_1, "preco" => $preco_1, "subtotal" => $preco_1 * $qtd1],
    ["nome" => $produto_2, "preco" => $preco_2, "subtotal" => $preco_2 * $qtd2],
    ["nome" => $produto_3, "preco" => $preco_3, "subtotal" => $preco_3 * $qtd3],
];

foreach($produtos as $produto){
    $subtotal = $preco * $quantidade;
}

require_once 'view.relatorio.php';
?>