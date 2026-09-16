<?php
$nome = $_POST['nome'];
$nota_1 = $_POST['Nota1'];
$nota_2 = $_POST['Nota2'];
$nota_3 = $_POST['Nota3'];

$Média = ($nota_1+$nota_2+$nota_3)/3;

if($Média >= 10){
    $Média = 10;
}

require_once "view_relatorio.php";
?>