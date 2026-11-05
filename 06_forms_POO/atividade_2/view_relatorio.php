<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <h1>Boletim Cadastrado</h1>
    <p>Nome do Aluno: <?= ?></p>
    <p>Turma: <?= $this->turma ?></p>

    <table border=1>
        <thead>
    <tr>
      <th>Nota 1</th>
      <th>Nota 2</th>
      <th>Nota 3</th>
      <th>Média</th>
    </tr>
        </thead>
    <tr>
      <td><?php $this->nota1?></td>
      <td><?php $this->nota2?></td>
      <td><?php $this->nota3?></td>
      <td><?php getcalcularMedia() ?></td>
    </tr>
</table>
    
    <?php if(getcalcularMedia() == "Aprovado"): ?> 
    <p>Parabéns, continue assim!</p>
<?php else: ?>
    <p>Atenção: procure o professor para saber os próximos passos!</p>
<?php endif; ?>
    <a href="view.php">Cadastrar outro</a>
</body>
</html>