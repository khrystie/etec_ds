<!-- 
            Programa:   Sistema de uma escola onde o coordenador pode cadastrar os professores,
            bem como editar seus dados e excluí-los. No sistema dos professores é possível visualizar a tabela com todos os nomes dos professores. 
            Arquivo listar.php:  lista de professores com ícones para poder editar dados ou excluí-los.
            Atividade avaliativa da agenda 8 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: sql, variáveis de sessão, cookies, require_once 
            Data: 17/04/2021
-->

<?php require_once 'verificarAcesso.php';?>
<?php require_once 'cabecalho.php';?> 

<a href="principal.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large w3-indigo w3-button w3-xxlarge"></i>     
</a> 
        <?php
       require_once 'conexaoBD.php';
                echo '
                <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
                <h1 class="w3-center w3-indigo w3-round-large w3-margin">Listagem de Professores</h1>
                <table class="w3-table-all w3-centered">
                <thead>   
                    <tr class="w3-center w3-indigo">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Disciplina</th>
                        <th>Senha</th>
                        <th>Excluir</th>
                        <th>Atualizar</th>
                    </tr>
                <thead>
                ';
                $sql = "SELECT * FROM professor" ;
                $resultado = $conexao->query($sql);
                if($resultado != null)
                foreach($resultado as $linha) {
                    echo '<tr>';
                    echo '<td>'.$linha['idprofessor'].'</td>';
                    echo '<td>'.$linha['nome'].'</td>';
                    echo '<td>'.$linha['disciplina'].'</td>';
                    echo '<td>'.$linha['senha'].'</td>';
                    echo '<td><a href="excluir.php?id='.$linha['idprofessor'].'&nome='.$linha['nome'].'&disciplina='.$linha['disciplina'].'&senha='.$linha['senha'].'"><i class="fa fa-user-times w3-large w3-text-indigo"></i> </a></td></td>';
                    echo '<td><a href="atualizar.php?id='.$linha['idprofessor'].'&nome='.$linha['nome'].'&disciplina='.$linha['disciplina'].'&senha='.$linha['senha'].'"><i class="fa fa-refresh w3-large w3-text-indigo""></i></a></td></td>';
                    echo '</tr>';
                }
                echo '
                    </table>
                </div>';
            $conexao->close();
        ?>
    </div>
<?php require_once 'rodape.php';?>