<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato de Locação</title>
</head>
    <body>
        <h1><b>Contrato de Locação</b></h1>
        <p><b>Nome:</b> <?= $nome ?></p>
        <p><b>Email: </b><?= $email ?></p>
        <p><b>Data de Retirada: </b><?= $data ?></p>
        <h2><b>Adicionais</b></h2>
        <p><b>Seguro Total: </b><?= $adicionais ?></p>
        <p><b>GPS: </b><?= $gps ?></p>
        <p><b>Cadeirinha Infantil: </b><?= $infantil ?></p>

        <table border="1" width="30%">
            <tr>
				<th>Item</th>
				<th>Diária</th>
				<th>Dias</th>
				<th>Subtotal</th>
			</tr>
            <tr>
                <td>Veículo Intermediário</td>
                <td>R$ 150.00<?php$diaria ?> </td>
                <td>7<?php$diaria ?></td>
                <td>R$ 1.050.00<?php$diaria ?></td>
            </tr>
            <tr>
                <td>Adicionais</td>
                <td>R$ 60.00<?php$diaria ?> </td>
                <td>7<?php$diaria ?></td>
                <td>R$ 420.00<?php$diaria ?></td>
            </tr>
        </table>
        <p><b>Total:</b></p>
    </body>
</html>