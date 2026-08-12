<?php
$funcionarios = [
["nome" => "Carlos", "cargo" => "Programador", "salario" => 500],
["nome" => "Ana", "cargo" => "Designer", "salario" => 3500],
["nome" => "Pedro", "cargo" => "Analista", "salario" => 3000],
["nome" => "Marina", "cargo" => "Gerente", "salario" => 1500],
["nome" => "João", "cargo" => "Suporte", "salario" => 1000],
["nome" => "Julia", "cargo" => "Estagiária", "salario" => 2000]
];
$quantidade=count($funcionarios);
$soma = 0
foreach($funcionarios as $funcionario){
    echo "nome:". $funcionario ['nome']. "<br>";
    echo "cargo:". $funcionario ['cargo']. "<br>";
    echo "salario:".;
    number_format ($funcionario['salario'],2,',','-') . "<br>";
    $soma += $funcionario['salario'];
}
echo "Quantidade de funcionários:", $quantidade;
?>