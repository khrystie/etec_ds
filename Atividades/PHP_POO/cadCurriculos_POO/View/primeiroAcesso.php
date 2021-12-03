<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Primeiro Acesso</title>
</head>
<body>
    <!-- início formulário de login -->
    <form action="/Controller/Navegacao.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-indigo w3-margin w3-display-middle" style="width: 30%;">
    <input type="hidden" name="nome_form" value="frmLogin" />
    <!-- título do formulário de login -->
    <h2 class="w3-center">Primeiro acesso</h2>

    
    <!-- início campo nome  -->
    <div class="w3-row w3-section">
        <!-- icon user -->
        <div class="w3-col" style="width:11%">
            <i class="w3-xxlarge fa fa-user"></i>
        </div>
        <!-- input nome -->
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome completo">
        </div>
    </div>
    <!-- fim campo nome -->

    <!-- início campo de login (cpf)  -->
    <div class="w3-row w3-section">
        <!-- icon cartão -->
        <div class="w3-col" style="width:13%;margin-left:-5px;">
            <i class="w3-xxlarge fa fa-drivers-license"></i>
        </div>
        <!-- input cpf -->
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="Login CPF (ex.: 33333333333)">
        </div>
    </div>
    <!-- fim campo de login (cpf) -->
   
    <!-- início campo email -->
    <div class="w3-row w3-section">
        <!-- icon email -->
        <div class="w3-col" style="width:11%">
            <i class="w3-xxlarge fa fa-envelope-o"></i>
        </div>
        <!-- input email -->
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email">
        </div>
    </div>
    <!-- fim campo email -->

    <!-- início campo senha -->
    <div class="w3-row w3-section">
        <!-- icon senha -->
        <div class="w3-col" style="width:11%">
            <i class="w3-xxlarge fa fa-lock"></i>
        </div>
        <!-- input senha -->
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password" placeholder="Senha">
        </div>
    </div>
    <!-- fim campo senha -->

    <!-- início botão cadastrar -->
    <div class="w3-row w3-section"> 
        <div class="w3-center">
            <button name="btnCadastrar" class="w3-button w3-block w3-margin w3-indigo w3-cell w3-round-large" style="width: 90%;">
                Cadastrar
            </button> 
        </div>
    </div>
    <!-- fim botão cadastrar -->

</form>    
<!-- fim formulário de login -->
</body>
</html>