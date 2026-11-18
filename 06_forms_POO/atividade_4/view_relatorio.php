<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1>Contrato de Matrícula</h1>
<h3>Aluno</h3>
<p>Nome: <?= $matricula->getAluno()->getNome() ?></p>
<p>IMC: <?= number_format($matricula->getAluno()->calcularIMC(), 1, ",", ".") ?>
(<?= $matricula->getAluno()->classificarIMC() ?>)</p>
<h3>Mensalidade</h3>
<table border="1">
<tr><th>Item</th><th>Valor mensal</th></tr>
<tr>
<td>Plano <?= $matricula->getPlano() ?></td>
<td>R$ <?= number_format($matricula->calcularValorPlano(), 2, ",", ".") ?></td>
</tr>
<?php foreach ($matricula->getModalidades() as $modalidade) { ?>
<tr>
<td><?= $modalidade ?></td>
<td>R$ <?= number_format($matricula->calcularValorModalidade($modalidade), 2, ",", ".") ?></td>
</tr>
<?php } ?>
<tr>
<th>Mensalidade</th>
<th>R$ <?= number_format($matricula->calcularMensalidade(), 2, ",", ".") ?></th>
</tr>
</table>
<p>Meses: <?= $matricula->getMeses() ?></p>
<p>Subtotal: R$ <?= number_format($matricula->calcularSubtotal(), 2, ",", ".") ?></p>
<p>Desconto (<?= $matricula->calcularPercentualDesconto() ?>%): R$ <?= number_format($matricula-
calcularDesconto(), 2, ",", ".") ?></p>
<h2>Total do contrato: R$ <?= number_format($matricula->calcularTotal(), 2, ",", ".") ?></h2>
<?php if ($matricula->calcularPercentualDesconto() > 0) { ?>
<p>Parabéns! Você ganhou <?= $matricula->calcularPercentualDesconto() ?>% de desconto.</p>
<?php } else { ?>
<p>Dica: fechando 6 meses ou mais você ganha desconto.</p>

20

<?php } ?>
<a href="view.php">Nova matrícula</a>
</body>
</html>