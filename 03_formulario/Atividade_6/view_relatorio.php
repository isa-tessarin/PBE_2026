<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
    <body>
        <h1><b>Compra de Ingressos</b></h1>
        <p>Nome:<?= $nome ?></p>
        <p>Filme:<?= $filme ?></p>
        <p>Ingressos:<?= $ingresso ?></p>
        <p>Tipo de Ingresso:<?= $tipo ?></p>

        <?php if($ingresso > 10): ?>
            <p><b>Você recebeu 10% de desconto!</b></p>
        <?php endif; ?>
    </body>
</html>