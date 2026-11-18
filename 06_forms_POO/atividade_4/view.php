<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula da Academia</title>
</head>
<body>
    <h1>Dados do Aluno</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome:</label><br>
        <input type="text" name="nome">
        <br>
        <label for="">Peso (kg):</label step="0.1"><br>
        <input type="number" name="peso">
        <br>
        <label for="">Altura (Metros):</label><br>
        <input type="number" name="altura" step="0.01">
        <br>
        <hr>
        <h1>Dados do Plano</h1><br>
        <label for="plano">Plano:</label><br>
            <select id="plano" name="plano" required>
                <option value="">Básico - R$ 80,00</option>
                <option value="">Plus - R$ 120,00</option>
                <option value="">Premium - R$ 180,00</option>
            </select><br><br>
        <label for="">Quantidade de Meses:</label><br>
        <input type="number" name="meses" min="1" max="12" required><br><br>
        <hr>
        <h1>Modalidades extras</h1>
        <input type="checkbox" name="modalidades[]" value="natacao">
        <label for="">Natação (+R$60,00)</label><br>
        <input type="checkbox" name="modalidades[]" value="funcional">
        <label for="">Funcional (+R$40,00)</label><br>
        <input type="checkbox" name="modalidades[]" value="Lutas">
        <label for="">Lutas (+R$50,00)</label><br><br>

        <button type="submit">Gerar Matrícula</button>
        <button type="reset">Cancelar</button>
    </form>
</body>
</html>