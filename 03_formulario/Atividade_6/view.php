<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Ingressos</title>
</head>
<body>
    <form action="logica.php" method="POST">
    <label for="">Nome do cliente:</label>
    <input type="text" name="nome">
    <br><br>
    <label for="">filme:</label>
    <input type="text" name="filme">
    <br><br>
    <label for="">Quantidade de Ingressos</label>
    <input type="number" name="ingressos" step="1">
    <br><br>
    <input type="radio" name="tipo" value="Inteira">
    <label for="">Inteira</label><br>
    <input type="radio" name="tipo" value="Meia">
    <label for="">Meia</label><br>
    <button>Calcular</button>
    </form>
</body>