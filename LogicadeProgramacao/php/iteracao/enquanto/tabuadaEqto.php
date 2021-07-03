<!-- 
        Programa: inserir número no formulário com action, exibe a tabuada do número digitado.
        Tag: laço de repetição enquanto, method POST
        Data: 28/02/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Form para tabuada</title>
</head>
<body class="w3-light-gray">
<div class="w3-third w3-center w3-display-topmiddle w3-animate-top w3-padding">
    <h2 class="w3-container w3-indigo ">Digite qualquer valor para gerar sua tabuada</h2>
    
    <form class="w3-container" method="post" action="tabuadaEqtoAction.php">
        <label class="w3-text-indigo"><b>Valor para cálculo da tabuada</b></label>
        <input class="w3-input w3-border w3-indigo" name="txtNumero" type="number" placeholder="Digite ex: 6">
        <br>
        <button class="w3-btn w3-indigo" name="btnCalcular">Calcular</button>
    </form>
</div>
</body>
</html>
