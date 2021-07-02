<!-- 
            Programa:   Exibe nomes de alunos e suas respectivas notas do bd alunoconcluinte.
            Atividade avaliativa da agenda 6 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: array, foreach, table, tr, thead, th, td, 
            Data: 19/03/2021
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <style>
    body {
        background: lightyellow;    
    }
    ::selection {
        background: lightpink;  
    }
     </style>
<title>Alunos Concluintes</title> 
</head>
<body>

<div class="w3-half w3-display-middle w3-center">
    <h1 class="w3-center w3-pink w3-round-large w3-margin w3-animate-top">
        Alunos Concluintes
    </h1>
    <table class="w3-table-all w3-hoverable w3-centered w3-border-light-blue w3-text-dark-grey"> 
        <thead>
            <tr> 
                <th>Código</th>
                <th>Nome</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
            </tr>
        </thead>
        <?php
        // bd
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pwii";
            
            // conexão com bd 
            $conexao = new mysqli($servername, $username, $password, $dbname); 
                // caso erro    
                if ($conexao->connect_error) {
                    die("Conexão falhou: " . $conexao->connect_error); 
                }

            // select tabela
            $sql = "SELECT * FROM alunoconcluinte" ;

            $resultado = $conexao->query($sql); 

                if($resultado != null) foreach($resultado as $linha) {
                    echo '<tr>';
                    echo '<td>'.$linha['idalunoconcluinte'].'</td>'; 
                    echo '<td>'.$linha['nome'].'</td>';
                    echo '<td>'.$linha['nota1'].'</td>';
                    echo '<td>'.$linha['nota2'].'</td>'; 
                    echo '<td>'.$linha['nota3'].'</td>'; 
                    echo '<td>'.$linha['nota4'].'</td>';  
                    echo '</tr>';
                }

            // fim conexão bd
            $conexao->close();
        ?>
    </table>
</div>
</body>
</html>
