<?php
$nome_cliente = $_POST['nome_cliente'];
$nome_evento = $_POST['nome_evento'];
$quantidade = $_POST['qtd'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$tipo = $_POST['tipo'];

$preco = 45;

$shows = [
        "data" => "$data",
        "nome_cliente" => "$nome_cliente",
        "nome_evento" => "$nome_evento",
        "horario" => "$horario",
        "tipo" => "$tipo",
        "quantidade" => "$quantidade"
    ];

$informacoes="";

foreach ($shows as $chave => $show) {
    $informacoes .= "$chave: $show <br>";
}

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