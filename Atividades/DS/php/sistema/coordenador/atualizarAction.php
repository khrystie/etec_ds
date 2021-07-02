<!-- 
            Programa:   Sistema de uma escola onde o coordenador pode cadastrar os professores,
            bem como editar seus dados e excluí-los. No sistema dos professores é possível visualizar a tabela com todos os nomes dos professores. 
            Arquivo atualizarAction.php:  atualiza dados do professor selecionado e exibe mensagem.           
            Atividade avaliativa da agenda 8 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: sql, variáveis de sessão, cookies, require_once 
            Data: 17/04/2021
-->

<?php require_once 'verificarAcesso.php';?>
<?php require_once 'cabecalho.php';?>

        <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php 
        // substitui linhas do comentario abaixo
        require_once 'conexaoBD.php';
        
        /* substitui
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pwii";
        $conexao = new mysqli($servername, $username, $password, $dbname);
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        } 
        */

        $sql = "UPDATE professor SET nome = '".$_POST['txtNome']."', disciplina = '".$_POST['txtDisciplina']."',
        senha='".$_POST['txtSenha']."' WHERE idprofessor =". $_POST['txtID'].";";
     
        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="listar.php">
                <h1 class="w3-button w3-indigo">Professor atualizado com sucesso! </h1>
            </a> 
            ';
        $id = mysqli_insert_id($conexao);
            
        } else {
            echo '
            <a href="listar.php">
                <h1 class="w3-button w3-indigo">ERRO! </h1>
            </a> 
            ';
        }
        $conexao->close();
       ?>
        </div>

       <?php require_once 'rodape.php';?>