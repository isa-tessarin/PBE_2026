<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <label for="">Nome do Aluno:</label><br>
        <input type="text" name="nome">
        <br>
        <label for="turma">Turma:</label><br>
            <select id="turma" name="turma" required>
                <option value="">selecione...</option>
                <option value="">1° IDS</option>
                <option value="">2° IDS</option>
                <option value="">3° IDS</option>
            </select><br>
        <label for="">Nota 1:</label><br>
        <input type="number" name="nota_1" step="0.1" required ><br>
        <label for="">Nota 2:</label><br>
        <input type="number" name="nota_2" step="0.1" required><br>
        <label for="">Nota 3:</label><br>
        <input type="number" name="nota_3" step="0.1" required><br>
        <label for="">Faltas:</label><br>
        <input type="number" name="falta" min="0" max="80" required><br>
        <br>
        <button type="submit">Gerar Boletim</button>
    </form>
</body>
</html>