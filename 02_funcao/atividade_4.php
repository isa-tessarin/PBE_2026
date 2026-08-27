<?php

function analisarNotas($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    $maior = max($nota1, $nota2, $nota3);
    $menor = min($nota1, $nota2, $nota3);
    
    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }
    return [
        'media'    => $media,
        'maior'    => $maior,
        'menor'    => $menor,
        'situacao' => $situacao
    ];
}
$resultado = analisarNotas(8.5, 6.0, 7.5);
echo "Média: " . number_format($resultado['media'], 2, ',', '.') . "\n";
echo "Maior Nota: " . $resultado['maior'] . "\n";
echo "Menor Nota: " . $resultado['menor'] . "\n";
echo "Situação: " . $resultado['situacao'] . "\n";

?>
