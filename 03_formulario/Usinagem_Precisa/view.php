<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <title>Usinagem Precisa</title>
</head >
<body style="background-color:#ffffff; text-align:center">
    <main>
    <img src="Logo.png" width="25%" >
    <form action="logica.php" method="POST">
        <label for=""><b>Nome do cliente:</b> </label>
        <br>
        <input type="text" name="nome" >
        <br>
        <label for=""><b>Telefone: </b></label>
        <br>
        <input type="text" name="telefone" >
        <br>
        <label for=""><b>CPF: </b></label>
        <br>
        <input type="text" name="cpf">
        <br>
        <label for=""><b>E-mail: </b></label>
        <br>
        <input type="text" name="email">
        <br>
        <label for=""><b>Endereço</b></label>
        <br>
    </main>
<?php
$url = "https://servicodados.ibge.gov.br/api/v1/localidades/municipios?orderBy=nome";

$resposta = file_get_contents($url);
$cidades = json_decode($resposta, true);

if ($cidades === null) {
    die("Não foi possível carregar as cidades.");
}

// Ordena as cidades em ordem alfabética
usort($cidades, function ($a, $b) {
    return strcoll($a["nome"], $b["nome"]);
});
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cidades do Brasil</title>
</head>
<body>

    <form method="POST">

        <select name="cidade" id="cidade" required>
            <option value="">Escolha uma cidade</option>

            <?php foreach ($cidades as $cidade) { ?>
                <option value="<?= htmlspecialchars($cidade["nome"]) ?>">
                    <?= htmlspecialchars($cidade["nome"]) ?>
                </option>
            <?php } ?>

        </select>
    </form>

    <?php
    if (isset($_POST["cidade"])) {
        echo "<p>Cidade selecionada: " .
            htmlspecialchars($_POST["cidade"]) .
            "</p>";
    }
    ?>

</body>
</html>
        <br><br>
        <button type="reset">Cancelar</button>
        <button type="submit">Comprar</button>
</body>
</html>
