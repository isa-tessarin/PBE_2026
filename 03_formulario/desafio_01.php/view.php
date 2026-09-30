<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de sálario líquido</title>
</head>
<body>
    <form action="processa.php" method="POST">
    <label for="">Nome do funcionário:</label>
    <input type="text" name="nome">
    <br><br>
    <label for="">Salário Bruto:</label>
    <input type="number" name="SalarioBruto">
    <br><br>
    <label for="">Horas extras:</label>
    <input type="number" name="Horaextras">
    <br><br>
    <label for="">Beneficios:</label>
    <input type="number" name="Beneficios">
    <br><br>
    <label for="">Descontos:</label>
    <input type="number" name="Descontos">
    <br><br>
    <button>Calcular Salário</button>
    </form>
</body>