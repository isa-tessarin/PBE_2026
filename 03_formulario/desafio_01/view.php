<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="logica.php" method="POST">
    <label for="">Primeiro número:</label>
    <input type="number" name="numero1">
    <br>
    <label for="">Segundo número:</label>
    <input type="number" name="numero2">
    <br>
    <button type="submit">enviar</button>
    <select name="Operação">
        <option value="">Selecione as operações</option>
        <option value="+">soma</option>
        <option value="-">subtração</option>
        <option value="*">multiplicação</option>
        <option value="/">divisão</option>

        <br>
    </form>
</body>