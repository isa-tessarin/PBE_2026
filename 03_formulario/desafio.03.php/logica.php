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

$total = $preco*$quantidade;

$shows = [
        "Nome Cliente" => "$nome_cliente",
        "Nome Evento" => "$nome_evento",
        "Quantidade" => "$quantidade",
        "Data" => "$data",
        "Horario" => "$horario",
        "Tipo" => "$tipo",
        "Preço" => "$preco"
    ];

$informacoes="";

foreach ($shows as $chave => $show) {
    $informacoes .= "$chave: $show <br>";
}


require_once "view.relatorio.php";

?>