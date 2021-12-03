<?php

    include_once '../Model/Usuario.php';
    include_once '../Controller/UsuarioController.php'; 
    include_once '../Controller/FormacaoAcadController.php'; 
    include_once '../Controller/ExperienciaProfissionalController.php';

    if(!isset($_SESSION)) {
        session_start();   
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Usuários Cadastrados</title>
</head>
<body>
    <!-- cabeçalho - nome fulano -->
    <header class="w3-container w3-padding-32 w3-center">
        <h1 class="w3-text-white w3-panel w3-indigo w3-round-large">
        <?php echo $_POST['txtIDNome'];?>  Currículo
        </h1>
    </header>
    
    <div class="w3-padding-128 w3-content w3-text-grey">
        <div class="w3-container">

        <!-- início dados do usuário -->
        <?php
            $uCon = new UsuarioController();
            $results = $uCon->gerarListaCamposUsuario($_POST['txtID']);
            if($results != null)

            while($row = $results->fetch_object()) {
                echo '<tr>';
                echo '<h3 class="w3-text-white w3-panel w3-indigo w3-round-large">'.'Nome: '.$row->nome.'</h3>';
                echo '<h3 class="w3-text-white w3-panel w3-indigo w3-round-large">'.'CPF: '.$row->cpf.'</h3>';
                echo '<h3 class="w3-text-white w3-panel w3-indigo w3-round-large">'.'Email: '.$row->email.'</h3>';
                echo '<h3 class="w3-text-white w3-panel w3-indigo w3-round-large">'.'Data de Nascimento: '.$row->dataNascimento.'</h3>';

                echo '</tr>';
            }
            else 
        ?>
        <!-- fim dados do usuário -->

        <!-- início lista formação acadêmica -->
        <div class="w3-container">
            <h3 class="w3-text-orange w3-center">
                Formação Acadêmica
            </h3>
            <table class="w3-table-all w3-centered">
                <thead>
                <tr class="w3-center w3-indigo">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                </tr>

                <?php
                    $fCon = new FormacaoAcadController();
                    // $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                    $results = $fCon->gerarLista($_POST['txtID']);
                    if($results != null)

                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                        echo '<td style="width: 10%;">'.$row->fim.'</td>';
                        echo '<td style="width: 65%;">'.$row->descricao.'</td>';

                        echo '</tr>';
                    }
                ?>
                
            </table>
        </div>
        <!-- fim lista formação acadêmica -->
        
        <!-- início lista experiência profissional -->
        <div class="w3-container">
            
            <h3 class="w3-text-orange w3-center">
                Experiência Profissional
            </h3>
            <table class="w3-table-all w3-centered">
                <thead>
                <tr class="w3-center w3-indigo">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Empresa</th>
                    <th>Descrição</th>
                </tr>

                <thead>

                <?php 
                    
                    $ePro = new ExperienciaProfissionalController();
                    $results = $ePro->gerarLista($_POST['txtID']);
                    // $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                        
                    if($results != null)    

                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                        echo '<td style="width: 10%;">'.$row->fim.'</td>';
                        echo '<td style="width: 10%;">'.$row->empresa.'</td>';
                        echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                        echo '</tr>';
                    }
                ?>

            </table>
            </div>
        <!-- fim lista experiência profissional -->

        </div>
    </div>      

    <!-- botão voltar -->
    <div class="w3-padding-128 w3-content w3-text-grey">
        <form action="/Controller/Navegacao.php" method="post" class="w3-container w3-light-grey w3-text-blue w3-margin w3-center" style="width: 30%;">
            <div class="w3-row w3-section">
                <div>
                    <button name="btnVoltarListarCadastrados" class="w3-button w3-block w3-margin w3-indigo w3-cell w3-round-large" style="width: 30%;">
                        Voltar
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>