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
    <title>GET e POST</title>
</head>
<body>

<div class="w3-container w3-indigo w3-padding">
    <h2>Cadastro confirmado com sucesso!</h2>

    <?php
        $nome = isset($_POST['txtNome']) ?$_POST["txtNome"] : "Nome não informado";
        $sobrenome = isset($_POST['txtSobrenome']) ?$_POST["txtSobrenome"] : "Sobrenome não informado ";
        $email = isset($_POST['txtEmail']) ?$_POST["txtEmail"] : "Email não informado";
        $formacao = isset($_POST['txtFormacao']) ?$_POST["txtFormacao"] : "Formação não informada";
        $emprego = isset($_POST['txtEmprego']) ?$_POST["txtEmprego"] : "Emprego não informado";
        // exibir dados
        echo "Nome: ". $nome ."<br>";
        echo "Sobrenome: ". $sobrenome ."<br>";
        echo "Email: ". $email ."<br>";
        echo "Formação: ". $formacao ."<br>";
        echo "Emprego: ". $emprego ."<br>" ;
    ?>
    <!-- link para página anterior -->
    <a href="javascript:void(0)" onClick="history.go(-1); return false;">Voltar para página anterior</a>
</div>

</body>
</html>