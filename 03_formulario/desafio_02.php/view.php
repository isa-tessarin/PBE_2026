<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Ingressos</title>
</head>
<body>
    <h1><b>Carrinho de Compras</b></h1>
    <h2><b>Dados do Cliente</b></h2>
    <form action="logica.php" method="POST">
    <label for="">Nome do cliente:</label>
    <input type="text" name="nome">
    <br><br>
    <h2><b>Produto 1:</b></h2>
    <label for="">Nome do Produto:</label>
    <input type="text" name="nome_produto1">
    <br>
    <label for="">Preço:</label>
    <input type="number" name="preco1">
    <br>
    <label for="">Quantidade:</label>
    <input type="number" name="qtd1">
    <br><br>
    <h2><b>Produto 2:</b></h2>
    <label for="">Nome do Produto:</label>
    <input type="text" name="nome_produto2">
    <br>
    <label for="">Preço:</label>
    <input type="number" name="preco2">
    <br>
    <label for="">Quantidade:</label>
    <input type="number" name="qtd2">
    <br><br>
    <h2><b>Produto 3:</b></h2>
    <label for="">Nome do Produto:</label>
    <input type="text" name="nome_produto3">
    <br>
    <label for="">Preço:</label>
    <input type="number" name="preco3">
    <br>
    <label for="">Quantidade:</label>
    <input type="number" name="qtd3">
    <br><br>
    <button>Calcular</button>
    </form>
</body>