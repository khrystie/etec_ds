<!-- 
		Programação: Formulário com caixa de seleção usando vetor
		Tag: laço de repetição para, vetor (array), select, option
		Data: 12/03/2021
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	<title>Arrays</title>
</head>
<body>
<div class="w3-third w3-center w3-animate-top w3-display-topmiddle w3-padding">
	
	<form class="w3-container" method="post" action="xxxAction.php">	
		<label class="w3-text-indigo"><b>Nome do Cliente</b></label> 
		<input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">
		
		<label class="w3-text-indigo"><b>Valor da Compra</b></label>
		<input class="w3-input w3-border w3-light-grey" name="txtValorCompra" type="number">

		<label class="w3-text-indigo"><b>Estado para envio:</b></label>
		<select class="w3-input w3-border w3-light-grey" name="cmbEstados">
			<?php
				$estados = array(
					"Acre",
					"Alagoas",
					"Amapá",
					"Amazonas",
					"Bahia",
					"Espírito Santo",
					"Goiás", 
					"Distrito Federal", 
					"Maranhão",
					"Mato Grosso",
					"Mato Grosso do Sul ",
					"Ceará", 
					"Minas Gerais",
					"Pará",
					"Paraíba",
					"Paraná",
					"Pernambuco",
					"Piauí", 
					"Rio de Janeiro", 
					"Rio Grande do Norte",
					"Rio Grande do Sul",
					"Rondônia",
					"Roraima" ,
					"Santa Catarina",
					"São Paulo",
					"Santa Catarina", 
					"Sergipe", 
					"Tocantins",
				);

			for($i = 0; $i < count($estados); $i++) {
				echo '<option value="'.$i.'">'.$estados[$i].'</option>'; 
			}
			?> 
		</select>
	<br>
	<button class="w3-btn w3-blue-grey">Enviar</button> </form>
		
</div>
</html>