<?php
$produtos = [
    "Mouse" => "Estoque: 10 unidades",
    "Notebook" => "Estoque: 2 unidades",
    "Monitor" => "Sem estoque",
    "Teclado" => "Estoque: 15 unidades",
    "Headset" => "Sem estoque",
    "Webcam" => "Estoque: 5 unidades"
];
$quantidade=count($produtos);
$preco=0;
$sem_estoque = 0;
foreach($produtos as $nome => $preco){
    if($preco == "Sem estoque")
        $sem_estoque++;
}
echo "Produtos sem estoque: ", $sem_estoque;
echo "<br>";
echo "A quantidade de produtos:", $quantidade;
?>