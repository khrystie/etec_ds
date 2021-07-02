<!-- 
            Programa:   Sistema de uma escola onde o coordenador pode cadastrar os professores,
            bem como editar seus dados e excluí-los. No sistema dos professores é possível visualizar a tabela com todos os nomes dos professores. 
            Arquivo excluir.php:  página para confirmar a exclusão do professor selecionado.           
            Atividade avaliativa da agenda 8 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: sql, variáveis de sessão, cookies, require_once 
            Data: 17/04/2021
-->
<?php require_once 'verificarAcesso.php';?> 
<?php require_once 'cabecalho.php';?>


    <!-- icon cancelar-->
    <a href="index.php" class="w3-red w3-center w3-padding w3-button w3-display-topmiddle" style="text-decoration:none;">
    <i class="fa fa-ban" style="font-size:5em;"></i>
    <p style="font-weight:bold;">CANCELAR EXCLUSÃO</p> </a>
    <!-- fim icon cancelar-->
<br>
    <!-- div principal -->
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-bottommiddle w3-margin">
        <h1 class="w3-center w3-indigo w3-round-large w3-margin">
            EXLUIR - ID: <?php echo " ".$_GET['id']?> 
        </h1>
        <form action="excluirAction.php" class="w3-container" method='post'> 
            <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>"><br>
            <label class="w3-text-indigo" style="font-weight: bold;">Nome</label> 
            <input name="txtNome" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['nome']?>"><br>
            <label class="w3-text-indigo" style="font-weight: bold;">Disciplina</label>
            <input name="txtDisciplina" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['disciplina']?>"><br>
            <label class="w3-text-indigo" style="font-weight: bold;">Senha</label> 
            <input name="txtSenha" class="w3-input w3-border w3-grey" disabled value="<?php echo $_GET['senha']?>"> <br>
        <button name="btnExcuir" class="w3-button w3-indigo w3-cell w3-round-large w3-right">
        <i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão. 
        </button>
        </form>
    </div>
    <!-- fim div principal -->

<?php require_once 'rodape.php';?>