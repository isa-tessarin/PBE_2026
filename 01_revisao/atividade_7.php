<?php
$notasAlunos = [
    "Ana" => 8.5,
    "Bruno" => 7.0,
    "Carlos" => 9.2,
    "Diana" => 7.0,
    "Eduardo" => 7.9
];
$somaNotas = 0;
$totalAlunos = count($notasAlunos);

foreach ($notasAlunos as $nome => $nota) {

    $notaFormatada = number_format($nota,1,'.','');
    echo "O aluno", $nome, "tirou nota ",$notaFormatada;
    echo "<br>";

    $somaNotas += $nota; 
    $mediaFormatada = number_format($mediaTurma, 2,'.','');
}

$mediaTurma = $somaNotas / $totalAlunos;
$mediaFormatada = number_format($mediaTurma, 2,'.','');

echo "<br> Ao final a média da turma foi",$mediaTurma;
?>