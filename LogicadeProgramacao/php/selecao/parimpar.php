<!-- 
    Programa: Inserir no formulário um número, ao clicar no botão,
    exibir se é um número par ou ímpar.
    Tag:  estrutura de decisão, função, method POST 
    Data: 12/03/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
     <style>
     ::selection {
       background: grey;  
     }
     </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-third w3-center w3-padding w3-light-grey">
    <h2 class="w3-container w3-indigo"> Par ou ímpar   </h2>

    <form class="w3-container" method="POST" action="parimparAction.php">
        <label class="w3-text-indigo">Insira um número: </label> 
        <input class="w3-input w3-border w3-white" name="txtValor" type="number" placeholder="Digite valor">
    
        <button class="w3-btn w3-grey w3-round-large" style="margin-top: 2%;" name="btnCalcular">Enviar</button>
    </form>
    </div>
</body>
</html>
