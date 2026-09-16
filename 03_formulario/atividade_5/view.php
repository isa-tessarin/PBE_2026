<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>
<body>
    <form action="logica.php" method="POST">
    <label for="">Nome:</label>
    <input type="text" name="nome">
    <br><br>
    <label for="">Peso em Kg:</label>
    <input type="number" name="peso" step="0.01">
    <br><br>
    <label for="">Altura em metros</label>
    <input type="number" name="altura" step="0.01">
    <br><br>
    <button>Calcular</button>
    </form>
</body>