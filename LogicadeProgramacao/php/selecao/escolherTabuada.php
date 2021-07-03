<!-- 
		Programa: Exibir números de 0 a 9  e após clique, redirecionar para a página com a tabuada do número selecionado.
		Tags: elseif, isset, laço de repetição para
		Data: 12/03/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale= 1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.margem{
		margin: auto;
	}
	</style>
	<title>Exemplo for</title>
</head>
<body class="w3-light-gray">
	<div class="w3-third w3-padding w3-display-topmiddle w3-animate-top w3-center w3-white">
	<h2 class="w3-indigo w3-padding">Escolha qual tabuada você deseja Visualizar</h2>
		<!-- Formulário -->
		<form class="w3-container" method="post" action="escolherTabuadaAction.php">
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn7">7</button>
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn8">8</button>
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn9">9</button>
			<br>
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn4">4</button>
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn5">5</button>
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn6">6</button>
			<br>
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn1">1</button>
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn2">2</button>
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn3">3</button>
			<br>
			<button class="w3-btn w3-indigo w3-margin w3-jumbo" name="btn0">0</button>
		<!-- Fim formulário -->
</div>
</body>
</html>