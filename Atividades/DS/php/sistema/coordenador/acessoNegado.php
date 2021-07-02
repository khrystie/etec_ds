<!-- 
            Programa:   Sistema de uma escola onde o coordenador pode cadastrar os professores,
            bem como editar seus dados e excluí-los. No sistema dos professores é possível visualizar a tabela com todos os nomes dos professores. 
            Arquivo acessoNegado.php:   Caso as páginas de cadastro e acesso sejam acessadas pelo link, sem estar logado, exibe mensagem para fazer login antes.          
            Atividade avaliativa da agenda 8 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: sql, variáveis de sessão, cookies, require_once 
            Data: 17/04/2021
-->
<?php require_once ('cabecalho.php'); ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
    echo '
    <a href="index.php">
    <h1 class="w3-button w3-indigo">Acesso NEGADO! </h1> <br>
    <h2 class="w3-button w3-indigo">É necessária a Realização do Login Inválido! </h2>
    </a>
    '; 
    ?>
</div>
<?php require_once ('rodape.php'); ?>
