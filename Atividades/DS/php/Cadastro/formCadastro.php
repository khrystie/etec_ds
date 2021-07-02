<!-- 
            Programa:   Formulário de cadastro com método POST.   
            Atividade avaliativa da agenda 2 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: label, input, button, method post, isset 
            Data: 21/02/2021
-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Método POST</title>
</head>
<body>
    <div class="w3-container w3-indigo">
        <h2>Cadastro</h2>
    </div>
<!-- início formulário  -->
<form class="w3-container" method="post" action="formcadastroAction.php">
        <label class="w3-text-indigo"><b>Nome</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">

        <label class="w3-text-indigo"><b>Sobrenome</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtSobrenome" type="text">

        <label class="w3-text-indigo"><b>Email</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtEmail" type="text">

        <label class="w3-text-indigo"><b>Formação</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtFormacao" type="text">

        <label class="w3-text-indigo"><b>Descrição Último Emprego</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtEmprego" type="text">
        <br>
        <button class="w3-btn w3-light-blue">Enviar</button>
    </form>
<!-- fim formulário -->
</body>
</html>
