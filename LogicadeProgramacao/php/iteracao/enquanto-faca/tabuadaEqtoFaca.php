<!-- 
        Programa: exibir botão com action para exibir as tabuadas
        Tag: button, method POST
        Data: 13/03/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <title>Do-WHILE</title>
</head>
<body>
    <!-- div-pai -->
    <div class="w3-third w3-center w3-display-topmiddle w3-animate-top w3-padding">
    <!-- título -->
    <h2 class="w3-container w3-indigo ">Clique para Gerar todas as Tabuadas do 0 a 10</h2> 
    <!-- formulário --> 
    <form class="w3-container" method="post" action="tabuadaEqtoFacaAction.php">
        <br>
        <!-- Botão enviar --> 
        <button class="w3-btn w3-indigo w3-margin w3- jumbo" name="btnGerar">Tabuadas</button>
    </form>
    <!-- fim-formulário -->
    </div>  
    <!-- final div-pai -->
</body>
</html>
