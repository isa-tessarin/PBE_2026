<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
    <body>
        <h1><b>Resultado do IMC</b></h1>
        <p>Nome:<?= $nome ?></p>
        <p>Peso:<?= $peso ?></p>
        <p>Altura:<?= $altura ?></p>
        <p>Resultado IMC:<?= $IMC ?></p>

        <?php if($IMC < 18.5): ?>
            <p><b>Abaixo da Média!!</b></p>
        <?php elseif($IMC >= 18.5 && $IMC <= 24.9): ?>
            <p><b>Peso normal!!</b></p>
        <?php elseif($IMC >= 25 && $IMC <= 29.9): ?>
            <p><b>Sobrepeso!!</b></p>
        <?php elseif($IMC >= 30): ?>
            <p><b>Obesidade!!</b></p>
        <?php else: ?>
            <p><b>Erro!!</b></p>
        <?php endif ?>
    </body>
</htm>