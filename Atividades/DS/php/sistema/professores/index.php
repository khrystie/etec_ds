<!-- Página de login -->

<?php require_once 'cabecalho.php';?>
<body class ="w3-light-grey">
    <div class="w3-container w3-round-xxlarge w3-display-middle w3-third " style="">
        <form class="w3-container " action="loginAction.php" method="post">
            <div class="w3-section">
                <label style="font-weight: bold;">Professor</label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o nome" name="txtNome" required>
                <label style="font-weight: bold;">Senha</label>
                <input class="w3-input w3-border" type="password" placeholder="Digite a Senha" name="txtSenha" required>
                <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Entrar</button>
            </div>
        </form>
        <br>
    
    </div>
</div>
<?php require_once 'rodape.php';?>
