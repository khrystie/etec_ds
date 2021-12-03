<?php
    include_once '../Model/Usuario.php';
    include_once '../Controller/FormacaoAcadController.php';
    include_once '../Controller/OutrasFormacoesController.php';
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
    <title></title>
    <style>
        /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */
        .w3-sidebar {
            width: 120px;
        }
        /*Define Fonte para todas as tags listadas abaixo*/
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif 
        }
    </style>
</head> 
<body class="w3-light-grey">

    <!-- início sidebar -->
    <nav class="w3-sidebar w3-bar-block w3-center w3-indigo">
        <!-- início item home -->
        <a href="#home" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-indigo w3-text-light-grey">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <!-- fim item home -->
        
        <!-- início item dados pessoais -->
        <a href="#dPessoais" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-indigo w3-text-light-grey">
            <i class="fa fa-address-book-o w3-xxlarge"></i> 
            <p>Dados Pessoais</p>
        </a>
        <!-- fim item dados pessoais -->

        <!-- início item formação -->
        <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-indigo w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>Formação</p>
        </a>    
        <!-- fim item formação -->
        
        <!-- início item outras formações -->
        <a href="#oFormacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-indigo w3-text-light-grey">
            <i class="fa fa-plus-square w3-xxlarge"></i>
            <p>Outras Formações</p>
        </a>    
        <!-- fim item outras formações -->

        <!-- início item Experiência Profissional -->
        <a href="#eProfissional" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-indigo w3-text-light-grey">
            <i class="fa fa-briefcase w3-xxlarge"></i>
            <p>Experiência Profissional</p>
        </a>    
        <!-- fim item outras formações -->
        
    </nav>
    <!-- fim sidebar -->
    
    <!-- início conteúdo aba home -->
    <div class="w3-padding-large" id="main">

        <!-- início header home -->
        <header class="w3-container w3-padding-32 w3-center " id="home">
            <h1>
                <img src="https://w7.pngwing.com/pngs/862/854/png-transparent-varenye-fruit-preserves-free-jar-color-material-color-splash-free-logo-design-template-label.png" alt="Logo" class="w3-image w3-round-xlarge w3-card w3-greyscale-min" width="50%">
                </br>
            </h1>
            <a class="w3-text-indigo" href="https://w7.pngwing.com/pngs/862/854/png-transparent-varenye-fruit-preserves-free-jar-color-material-color-splash-free-logo-design-template-label.png">Designed by PNGwings</a>
            <br>
            <h1 class="w3-text-indigo">
                SISTEMA
            </h1>
        </header>
        <!-- fim header home -->
    </div>
    <!-- fim conteúdo aba home -->

    <!-- início conteúdo aba  dados pessoais -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
        <h2 class="w3-text-indigo">Dados Pessoais</h2>
        <!-- início formulário dados pessoais -->
        <form action="/Controller/Navegacao.php" method="post" class="w3-row w3-light-grey w3-text-amber w3-margin" style="width:70%;">
           
            <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="<?php echo unserialize($_SESSION['Usuario'])->getID();?>">
           
            <!-- início campo nome -->
            <div class="w3-row w3-section">
                <!-- icon user -->
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-user"></i>
                </div>
                <!-- input nome -->
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="<?php echo unserialize($_SESSION['Usuario'])->getNome();?>">
                </div>
            </div>
            <!-- fim campo nome -->

            <!-- início campo calendário -->
            <div class="w3-row w3-section">
                <!-- icon calendario -->
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-calendar"></i>
                </div>
                <!-- input calendário -->
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtData" type="date" placeholder="" value="<?php echo unserialize($_SESSION['Usuario'])->getDataNascimento();?>">
                </div>
            </div>
            <!-- fim campo calendário -->

            <!-- início campo (cpf) -->
            <div class="w3-row w3-section">
                <!-- icon cartão -->
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-drivers-license"></i>
                </div>
                <!-- input cpf -->
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF: 33333333333" value="<?php echo unserialize($_SESSION['Usuario'])->getCPF();?>">
                </div>
            </div>
            <!-- fim campo (cpf) -->

            <!-- início campo email -->
            <div class="w3-row w3-section">
                <!-- icon email -->
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-envelope-o"></i>
                </div>
                <!-- input email -->
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email" value="<?php echo unserialize($_SESSION['Usuario'])->getEmail();?>">
                </div>
            </div>
            <!-- fim campo email -->

            <!-- início campo botão atualizar -->
            <div class="w3-row w3-section">
                <div class="w3-center" style="">
                    <button name="btnAtualizar" class="w3-button w3-block w3-margin w3-indigo w3-cell w3-round-large" style="width: 90%;">
                        Atualizar
                    </button>
                </div>
            </div>
            <!-- fim campo botão atualizar -->
        </form>
        <!-- fim formulário dados pessoais -->
    </div>
    <!-- fim conteúdo aba dados pessoais -->

    <!-- início conteúdo aba formação -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
        <h2 class="w3-text-indigo">Formação</h2>

        <form action="/Controller/Navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-amber w3-margin" style="width:70%;">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res" style="">
                    Data Final
                </div>
            </div>

            <!-- início campo calendário -->
            <div class="w3-row w3-section">
                <!-- início coluna lado equerdo -->
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date" placeholder="">
                    </div>
                </div> 
                <!-- fim coluna lado equerdo -->

                <!-- início coluna lado direito -->
                <div class="w3-row w3-section w3-rest" style = "">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date" placeholder="">
                    </div>
                </div> 
                <!-- fim coluna lado direito --> 
            </div>
            <!-- fim campo calendário -->
            <div> 
                <!-- início campo descrição da formação -->
                <div class="w3-row w3-section">
                    <!-- icon formação -->
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <!-- input descrição da formação -->
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                    </div>
                </div>
                <!-- fim campo descrição da formação -->

                <!-- início botão adicionar formação -->
                <div class="w3-row w3-section">
                    <div class="w3-center" style="">
                        <button name="btnAddFormacao" class="w3-button w3-block w3-indigo w3-cell w3-round-large" style="width: 20%;">
                            <i class="w3-xxlarge fa fa-user-plus"></i>
                        </button>
                    </div>
                </div>
                <!-- fim botão adicionar formação -->
        </form>
        <!-- início lista -->
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>


                <tr class="w3-center w3-indigo">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>

                <?php
                    $fCon = new FormacaoAcadController();
                    $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                    if($results != null)

                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                        echo '<td style="width: 10%;">'.$row->fim.'</td>';
                        echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                        echo '<td style="width: 5%;">
                        <form action="/Controller/Navegacao.php" method="post">
                            <input type="hidden" name="id" value="'.$row->idformacaoAcademica.'">
                            <button name="btnExcluirFA" class="w3-button w3-block w3-indigo w3-cell w3-round-large">
                                <i class="fa fa-user-times"></i>
                            </button>
                            </td>
                        </form>';
                        echo '</tr>';
                    }
                ?>
                
            </table>
        </div>
        <!-- fim lista -->     
    </div>
    <!-- fim conteúdo aba formação -->

                  
    <!-- início conteúdo aba Outras Formações -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="oFormacao">
        <h2 class="w3-text-indigo">Outras Formações</h2>

        <form action="/Controller/navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-amber w3-margin" style="width:70%;">
            
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res" style="">
                    Data Final
                </div>
            </div>

            <!-- início campo calendário -->
            <div class="w3-row w3-section">
                <!-- início coluna lado equerdo -->
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date" placeholder="">
                    </div>
                </div> 
                <!-- fim coluna lado equerdo -->

                <!-- início coluna lado direito -->
                <div class="w3-row w3-section w3-rest" style = "">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date" placeholder="">
                    </div>
                </div> 
                <!-- fim coluna lado direito --> 
            </div>
            <!-- fim campo calendário -->

            <!-- início campo descrição OF -->
            <div> 
                <div class="w3-row w3-section">
                    <!-- icon OF -->
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <!-- input descrição OF -->
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text" placeholder="Ex. Curso de Inglês - Inglês City">
                    </div>
                </div>
            <!-- fim campo descrição OF -->

                <!-- início botão adicionar OF -->
                <div class="w3-row w3-section">
                    <div class="w3-center" style="">
                        <button name="btnAddOF" class="w3-button w3-block w3-indigo w3-cell w3-round-large" style="width: 20%;">
                            <i class="w3-xxlarge fa fa-user-plus"></i>
                        </button>
                    </div>
                </div>
                <!-- fim botão adicionar OF -->
        </form>
        <!-- início lista -->
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                <tr class="w3-center w3-indigo">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                <?php
                    $fCon = new OutrasFormacoesController();
                    $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                    if($results != null)

                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                        echo '<td style="width: 10%;">'.$row->fim.'</td>';
                        echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                        echo '<td style="width: 5%;">
                        <form action="/Controller/Navegacao.php" method="post">
                            <input type="hidden" name="id" value="'.$row->idoutrasformacoes.'">
                            <button name="btnExcluirOF" class="w3-button w3-block w3-indigo w3-cell w3-round-large">
                            <i class="fa fa-user-times"></i> 
                                </button>
                            </td>
                        </form>';
                        echo '</tr>';
                    }
                    ?>
            </table>
        </div>
        <!-- fim lista -->        
    </div>
    <!-- fim conteúdo aba Outras Formações-->
   


    <!-- início conteúdo Experência Profissional -->
    <div class="w3-padding-128 w3-content w3-text-grey" id="eProfissional">
        <h2 class="w3-text-indigo">Experiência Profissional</h2>

        <form action="/Controller/navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-amber w3-margin" style="width:70%;">    
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    Data Inicial
                </div>
                <div class="w3-res" style="">
                    Data Final
                </div>
            </div>

            <div class="w3-row w3-section">

                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
                    </div>
                </div> 


                <div class="w3-row w3-section w3-rest" style = "">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
                    </div>
                </div> 
            </div>

            <div> 
                <div class="w3-row w3-section">

                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>

                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Centro Paula Souza">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB">
                    </div>
                </div>
            
                <div class="w3-row w3-section">
                    <div class="w3-center" style="">
                        <button name="btnAddEP" class="w3-button w3-block w3-indigo w3-cell w3-round-large" style="width: 20%;">
                            <i class="w3-xxlarge fa fa-user-plus"></i>
                        </button>
                    </div>
                </div>
            
        </form>
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                <tr class="w3-center w3-indigo">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Empresa</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>

                <thead>
                <?php 
                    $ePro = new ExperienciaProfissionalController();
                    $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());

                    if($results != null)

                        while($row = $results->fetch_object()) {
                            echo '<tr>';
                            echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                            echo '<td style="width: 10%;">'.$row->fim.'</td>';
                            echo '<td style="width: 10%;">'.$row->empresa.'</td>';
                            echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                            echo '<td style="width: 5%;">
                                <form action="/Controller/Navegacao.php" method="post">
                       <input type="hidden" name="idEP" value="'.$row->idexperienciaprofissional.'">
                                    <button name="btnExcluirEP" class="w3-button w3-block w3-indigo w3-cell w3-round-large">
                                        <i class="fa fa-user-times"></i> 
                                    </button>
                            </td>
                                </form>';
                            echo '</tr>';
                       }
                ?>
            </table>
        </div>
    </div>
     <!-- fim conteúdo Experência Profissional -->







</body>
</html>