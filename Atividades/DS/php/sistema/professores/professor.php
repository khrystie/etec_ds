<!-- lista de professores -->

<?php require_once('verificarAcesso.php')?>
<?php require_once('cabecalho.php') ?>

<body class="w3-light-grey">
        <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin w3-card">
        <h1 class="w3-center w3-deep-orange  w3-margin w3-round">Professores</h1>
        <table class="w3-table-all w3-centered w3-text-black">
        <thead>   
            <tr class="w3-center w3-indigo ">
                <th>Código</th>
                <th>Nome</th>
                <th>Disciplina</th>
               <!-- <th>Alunos</th> -->

            </tr>
        <thead>
        <?php
            require_once 'conexaoBD.php';
            $conexao->set_charset("utf8");
            if ($conexao->connect_error) {
                die("Connection failed: " . $conexao->connect_error);
            } 
            $sql = "SELECT * FROM professor" ;
            $resultado = $conexao->query($sql);
            if($resultado != null)
            foreach($resultado as $linha) {
                echo '<tr>';
                echo '<td>'.$linha['idprofessor'].'</td>';
                echo '<td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['disciplina'].'</td>';
               // echo '<td><a href="">eaes</a></td>';

                echo '</tr>';
            }
            $conexao->close();
        ?>
    </table>
  

</div>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-bottomright">
        <form action="logoutAction.php" class="w3-container" method='post'>
            <button name="btnLogout" class="w3-button w3-red w3-cell w3-round-large w3-right w3-margin-right"> 
                <i class="w3-xxlarge fa fa-times-rectangle"> </i> Logout
            </button>
        </form>
    </div>
</body>
</html>