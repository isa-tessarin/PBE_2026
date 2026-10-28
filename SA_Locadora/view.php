<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Locadora de Veículos</title>
	</head>
	<body>
		<header>
			<h1 >Locadora de Veículos</h1>
            <h2 >Dados do Cliente</h2>
		</header>
		<form action="logica.php" method="POST">
		
			<label for="nome">Nome:</label>
			<br>
			<input type="text" id="nome" name="nome" required>
			<br><br>
			
			<label for="email">Email:</label>
			<br>
			<input type="email" id="email" name="email" required>
			<br><br>
			<h2>Dados da Locação</h2>
            <br>
			<label for="data">Data da retirada:</label>
			<br>
			<input type="date" id="data" name="data" required>
			<br><br>
			
			<label for="telefone">Quantidade de dias:</label>
			<br>
			<input type="number" id="dias" name="dias" required>
			<br><br>
			<label for="categoria">Categoria do veículo:</label>
			<br>
			<select name="categoria" id="categoria" required>
				<option value="">Selecione...</option>
				<option value="econômico">Econômico - R$100.00/dia</option>
				<option value="Intermediário">Intermediário - R$150.00/dia</option>
				<option value="SUV">SUV - R$250.00/dia</option>
			</select>
			<br><br>
			<h2>Adicionais</h2>
			<label for="genero">Seguro total(R$ 40,00/dia)</label>
			<br>
			<input type="radio" id="sim" name="adicionais" required>Sim
			<input type="radio" id="não" name="adicionais">Não
			<br><br>
            <label for="genero">GPS(R$ 15,00/dia)</label>
			<br>
			<input type="radio" id="sim" name="gps" required>Sim
			<input type="radio" id="não" name="gps">Não
			<br><br>
            <label for="genero">Cadeirinha Infantil(R$ 20,00/dia)</label>
			<br>
			<input type="radio" id="sim" name="infantil" required>Sim
			<input type="radio" id="não" name="infantil">Não
			<br><br>
            <button type="submit">Gerar Contrato</button>
		</form>
	</body>
</html>