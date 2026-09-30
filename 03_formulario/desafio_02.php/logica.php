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

$produtos = [
    ["nome" => $produto_1, "preco" => $preco_1,"quantidade" => $qtd_1,"subtotal" => $preco_1 * $qtd_1],
    ["nome" => $produto_2, "preco" => $preco_2, "quantidade" => $qtd_2, "subtotal" => $preco_2 * $qtd_2],
    ["nome" => $produto_3, "preco" => $preco_3, "quantidade" => $qtd_3,"subtotal" => $preco_3 * $qtd_3]
];
$total = 0;
foreach($produtos as $produto){
    $total += $produto['subtotal'];
}

$desconto = 0;
if($total > 500){
    $desconto = 10;
}
$valorDesconto = $total * ($desconto/100);

$total = $total - $valorDesconto;

require_once 'view.relatorio.php';
?>