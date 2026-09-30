<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Ingressos</title>
</head>
<body>
    <h2 style="color:darkred; font-family: Comic Sans MS, cursive ;">Inscrição em Evento</h2>
    <br>
    <form action="logica.php" method="POST" style="background:  #f3e5f5; padding: 15px; border-radius:8px; width:350px">
    <label type="text", name="nome", style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;">Nome Completo:</label>
    <br>
    <input type="text" name="nome">
    <br><br>
    <label name="tipo_ingresso", style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;">Tipo de Ingresso:</label>
	<br>
	<select name="tipo" id="identificar_comprovante" required>
	<option value="">Escolha...</option>
		<option value="">Estudante</option>
		<option value="">Área VIP</option>
	    <option value="">OpenBar</option>
		<option value="">Inteira</option>
	</select>
    <br><br>
    <label style="color:purple; font-family:Arial;">Data do Evento:</label>
    <br>
    <input type="date" name="data">
    <br><br>
    <label style="color:purple; font-family:Arial;">Hora de Chegada:</label>
    <br>
    <input type="time" name="hora">
    <br><br>
    <button style="background:purple; color:white; padding:5px10px;">Inscrever-se</button>
    </form>
</body>