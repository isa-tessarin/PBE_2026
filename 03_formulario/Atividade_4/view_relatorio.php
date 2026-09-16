<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do Aluno</title>
</head>
    <body>
        <h1>Resultado do Aluno</h1>
        <p>Nome:<?= $nome ?></p>
        <p>Nota 1:<?= $nota_1 ?></p>
        <p>Nota 2:<?= $nota_2 ?></p>
        <p>Nota 3:<?= $nota_3 ?></p>
        <p>Média Final:<?= $Média ?></p>

        <?php if($Média >= 7): ?>
            <p><b>Aprovado!!</b></p>
        <?php else: ?>
            <p><b>Reprovado!!</b></p>
        <?php endif ?>
        <p><b>Você Atingiu a nota máxima!!</b></p>
    </body>
</htm>