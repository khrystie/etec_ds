<!--     
            Programa: Três formas de visualizar tabuada: escolher número, digitar número e mostrar tabuadas.
            Tag: button, form Action, method POST
            Data: 28/02/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Tabuada</title> </head>
<body>

    <h3 class="w3-text-indigo w3-center">Data</h3>
    <div class="w3-container w3-center w3-light-grey w3-padding">

        <!-- primeira coluna -->
        <div class="w3-third w3-center w3-border w3-white w3-padding">
            <!-- Formulário-->
            <h4 class="w3-text-dark-grey">Escolha um número para ver sua respectiva tabuada: </h4>
            <form class="w3-container" method="post" action="tabuadaTodasAction1.php">
                <!-- botões -->
                <button class="w3-button w3-indigo w3-margin" name="btn0">0</button>
                <button class="w3-button w3-indigo w3-margin" name="btn1">1</button>
                <button class="w3-button w3-indigo w3-margin" name="btn2">2</button>
                <button class="w3-button w3-indigo w3-margin" name="btn3">3</button>
                <button class="w3-button w3-indigo w3-margin" name="btn4">4</button>
                <button class="w3-button w3-indigo w3-margin" name="btn5">5</button>
                <button class="w3-button w3-indigo w3-margin" name="btn6">6</button>
                <button class="w3-button w3-indigo w3-margin" name="btn7">7</button>
                <button class="w3-button w3-indigo w3-margin" name="btn8">8</button>
                <button class="w3-button w3-indigo w3-margin" name="btn9">9</button>
                <button class="w3-button w3-indigo w3-margin" name="btn10">10</button>
                <!-- Fim-botões --> 
            </form>
            <!-- Fim-formulário -->
        </div>
        <!-- Fim primeira coluna -->

        <!-- segunda coluna -->
        <div class="w3-third w3-center w3-border w3-white w3-padding">
            <!-- Formulário-->
            <h4 class="w3-text-dark-grey">Digite um número inteiro para gerar sua tabuada: </h4>
            <form class="w3-container" method="POST" action="tabuadaTodasAction2.php">
                <!-- botões -->
                <input class="w3-input w3-light-grey w3-text-dark-grey" name="txtNumero" placeholder="Digite qualquer número inteiro">
                <button class="w3-button w3-indigo w3-margin" type="number" name="calcValor">Enviar</button>
                <!-- Fim-botões --> 
            </form>
            <!-- Fim-formulário -->
        </div>
        <!-- Fim segunda coluna -->

        <!-- terceira coluna -->
        <div class="w3-third w3-center w3-border w3-white w3-padding">
            <!-- Formulário-->
            <h4 class="w3-text-dark-grey">Clique para ver todas as tabuadas de 0 a 10: </h4>
            <form class="w3-container" method="POST" action="tabuadaTodasAction3.php">
                <!-- botões -->
                <button class="w3-button w3-indigo w3-margin" name="tab">Gerar tabuadas!</button>
                <!-- Fim-botões --> 
            </form>
            <!-- Fim-formulário -->
        </div>
        <!-- Fim terceira coluna -->
    </div>
    
</body>
</html>