<!-- 	
		Programa: Lista de jogos do banco de dados pwii.
		Tag: foreach, sql, mysqli
		Data: 23/03/2021
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/4.7.0/css/font-awesome.min.css">
	<title>Tabela Jogos - MYSQLI</title> 
</head>
<body class="w3-light-gray">
<div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
	<h1 class="w3-center w3-indigo w3-round-large w3-margin">Listagem de Jogos</h1>
	<table class="w3-table-all w3-centered w3-text-black"> 
		<thead>
			<!-- define linhas das células -->
			<tr class="w3-center w3-indigo ">
				<!-- th define uma célula cabeçalho do grupo de células da tabela -->
				<th>Código</th> 
                <th>Nome</th>
                <th>Fabricante</th>
			</tr>
		</thead>
		
	<?php
		// conexão com o banco de dados
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "pwii";
		$conexao = new mysqli($servername, $username, $password, $dbname); 
		
		// caso dê erro na conexão com o banco de dados
		if ($conexao->connect_error) {
			die("Erro na conexão " . $conexao->connect_error); 
			}
		// DML --> select 	
		$sql = "SELECT * FROM jogo" ; 
		$resultado = $conexao->query($sql); 
		
		if($resultado != null) foreach($resultado as $linha) {
			echo '<tr>';
				echo '<td>'.$linha['idjogo'].'</td>'; 
				echo '<td>'.$linha['nome'].'</td>';
				echo '<td>'.$linha['fabricante'].'</td>'; 
			echo '</tr>';
		}
		
    $conexao->close();
?>
</table>
</div>
</body>
</html>