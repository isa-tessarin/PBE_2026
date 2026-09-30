<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
    <body>
        <h1><b>Resumo da Compra</b></h1>
        <tr>
            <td><b>Nome:<?= $nome_cliente ?></td>
            <td>Produto 1:<?= $produto_1 ?></td>
            <td>Preço:<?= $preco_1 ?></td>
            <td>Quantidade:<?= $qtd_1 ?></td>
        </tr>
        <?php if($ingresso > 10): ?>
            <p><b>Você recebeu 10% de desconto!</b></p>
        <?php endif; ?>
    </body>
</htm>