<!-- 
            Programa:   Sistema de uma escola onde o coordenador pode cadastrar os professores,
            bem como editar seus dados e excluí-los. No sistema dos professores é possível visualizar a tabela com todos os nomes dos professores. 
            Arquivo index.php:  página de login. 
            Atividade avaliativa da agenda 8 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: sql, variáveis de sessão, cookies, require_once 
            Data: 17/04/2021
-->

<?php require_once 'cabecalho.php';?>
<body class ="w3-light-grey">
    <div class="w3-container w3-round-xxlarge w3-display-middle w3-third " style="">
        <form class="w3-container " action="loginAction.php" method="post">
            <div class="w3-section">
                <label style="font-weight: bold;">Usuário</label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o nome" name="txtNome" required>
                <label style="font-weight: bold;">Senha</label>
                <input class="w3-input w3-border" type="password" placeholder="Digite a Senha" name="txtSenha" required>
                <button class="w3-button w3-block w3-indigo w3-section w3-padding" type="submit">Entrar</button>
            </div>
        </form>
        <br>
    
    </div>
</div>
<?php require_once 'rodape.php';?>
