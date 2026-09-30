<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
</head>
    <body  bgcolor="#4A147A" text="#FFFFFF">
        <img width= "20%"src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/b963f9116104893.605b4f4ea67b6.png">
        <h1><b>Ingresso</b></h1>
        <p><b>Nome:</b><br><?= $nome_cliente ?></p>
        <p><b>Evento:</b><br><?= $nome_evento ?></p>
        <p><b>Ingressos:</b><br><?= $quantidade ?></p>
        <p><b>Data:</b><br><?= $data ?></p>
        <p><b>Horario:</b><br><?= $horario ?></p>
        <p><b>Valor: R$</b><br><?= $total ?></p>
        <p><b>Tipo de Ingresso:</b><br><?= $tipo ?></p>

        <?php if($desconto > 10)?>
        <p><b>Parabéns, Você ganhou desconto!!<b></p>
    </body>
</html>