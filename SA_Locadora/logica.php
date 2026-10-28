<?php
// Isadora Aparecida Uliana Tessarin e Natamie Felippe Sant Clair

$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$dias = $_POST['dias'];
$categoria = $_POST['categoria'];
$adicionais = $_POST['adicionais'];
$gps = $_POST['gps'];
$infantil = $_POST['infantil'];
$subTotalAdicionais = 0;
$subTotalVeiculos = 0;

function calcularSubtotal($diaria,$dias){
    return $diaria * $dias;
}
function calcularPercentualDesconto($dias){
    if($dias >= 1 && $dias <= 6){
        $desconto = 0;
    }else if($dias >= 7 && $dias <= 14){
        $desconto = 10;
    }else{
        $desconto = 20;
    }
    return $desconto;
}

if($categoria == "econômico"){
    $diaria = 100;
}elseif($categoria == "Intermediário"){
    $diaria = 150;
}elseif($categoria == "SUV"){
    $diaria = 250;
}

if($adicionais == "sim"){
    $subTotalAdicionais += 40;
}
if($gps == "sim"){
    $subTotalAdicionais += 15;
}

if($categoria == "econômico"){
    $subTotalVeiculos += 100;
}
if($categoria == "Intermediário"){
    $subTotalVeiculos += 150;
}
if($categoria == "SUV"){
    $subTotalVeiculos += 250;
}

$subTotalAdicionais = calcularSubtotal($subTotalAdicionais, $dias);
$subTotalVeiculos = calcularSubtotal($subTotalVeiculos, $dias);

$total = $subTotalAdicionais + $subTotalVeiculos;
$desconto = calcularPercentualDesconto($dias);
$valorDesconto = $desconto/100;

$total_pagar = $total - $desconto;

require_once "view.relatorio.php";