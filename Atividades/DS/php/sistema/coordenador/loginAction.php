<!-- 
            Programa:   Sistema de uma escola onde o coordenador pode cadastrar os professores,
            bem como editar seus dados e excluí-los. No sistema dos professores é possível visualizar a tabela com todos os nomes dos professores. 
            Arquivo loginAction.php:  caso login e senha estejam corretos, exibe mensagem com link para a página principal .
            Atividade avaliativa da agenda 8 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: sql, variáveis de sessão, cookies, require_once 
            Data: 17/04/2021
-->
<?php require_once 'cabecalho.php';?>
<body class ="w3-light-grey">
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
    <?php
    session_start();    
    $nome = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];
       require_once 'conexaoBD.php';
       $sql = "SELECT * FROM usuario WHERE nome =  '".$nome."';";

       $resultado = $conexao->query($sql);
       //echo $sql;
       $linha = mysqli_fetch_array($resultado);
       if($linha != null)
        {
            if($linha['senha'] == $senha )
            {
                echo '
                <a href="principal.php">
                    <h1 class="w3-button w3-indigo">Login Realizado com Sucesso!  </h1>
                </a> 
                ';
                $_SESSION['logado'] = $nome;
            }
            else
            {
                echo '
                <a href="index.php">
                    <h1 class="w3-button w3-red">Login Inválido! </h1>
                </a> 
                ';
            }
        }
        else
            {
                echo '
                <a href="index.php">
                    <h1 class="w3-button w3-red">Login Inválido! </h1>
                </a> 
                ';
            }
        $conexao->close();
    ?>
    </div>
<?php require_once 'rodape.php';?>
