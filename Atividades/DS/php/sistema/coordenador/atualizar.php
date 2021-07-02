<!-- 
            Programa:   Sistema de uma escola onde o coordenador pode cadastrar os professores,
            bem como editar seus dados e excluí-los. No sistema dos professores é possível visualizar a tabela com todos os nomes dos professores. 
            Arquivo atualizar.php:  página para atualizar dados do professor selecionado.           
            Atividade avaliativa da agenda 8 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: sql, variáveis de sessão, cookies, require_once 
            Data: 17/04/2021
-->
<?php require_once 'verificarAcesso.php';?>
<?php require_once 'cabecalho.php';?>


<a href="index.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large w3-indigo w3-button w3-xxlarge"></i>     
</a>  
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-indigo w3-round-large w3-margin">Atualizar - ID: <?php echo " ".$_GET['id']?> </h1>
    <form action="atualizarAction.php" class="w3-container" method='post'>
       
        <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
        <br>
        <label class="w3-text-indigo" style="font-weight: bold;">Nome</label>
        <input name="txtNome" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['nome']?>">
        <br>
        <label class="w3-text-indigo" style="font-weight: bold;">Disciplina</label>
        <input name="txtDisciplina" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['disciplina']?>">
        <br>
        <label class="w3-text-indigo" style="font-weight: bold;">Senha</label>
        <input name="txtSenha" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['senha']?>">
        <br>
        <button name="btnAtualizar" class="w3-button w3-indigo w3-cell w3-round-large w3-right"> 
            <i class="w3-xxlarge fa fa-refresh"></i> Atualizar
        </button>
    </form>
</div> 

<?php require_once 'rodape.php';?>