<!-- 
            Programa:   Exibe nomes de alunos e suas respectivas médias do primeiro e segundo semestre.
            Atividade avaliativa da agenda 5 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: array, foreach, table, tr, th, td, 
            Data: 19/03/2021
-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas do oitano ano A</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<body>

<!-- Início divisão principal -->    
<div class="w3-half w3-display-middle w3-center"> 

<!-- Início php -->
<?php 

    // Conteúdo de cada linha
    $alunos = array(
        array("nome"=> "Aline","primeiroSemestre"=> 10, "segundoSemestre"=> 9.5),
        array("nome"=> "Alfredo","primeiroSemestre"=> 8, "segundoSemestre"=> 5),
        array("nome"=> "Carla","primeiroSemestre"=> 5, "segundoSemestre"=> 6.5),
        array("nome"=> "César","primeiroSemestre"=> 9, "segundoSemestre"=> 9),
        array("nome"=> "Daniel","primeiroSemestre"=> 10, "segundoSemestre"=> 7),
        array("nome"=> "Esnar","primeiroSemestre"=> 8, "segundoSemestre"=> 6),
        array("nome"=> "Henzo","primeiroSemestre"=> 6, "segundoSemestre"=> 8),
        array("nome"=> "Pablo","primeiroSemestre"=> 7, "segundoSemestre"=> 5),
        array("nome"=> "Wallace","primeiroSemestre"=> 8, "segundoSemestre"=> 7),
        array("nome"=> "Zulmira","primeiroSemestre"=> 10, "segundoSemestre"=> 6)
        );

    // Título tabela 
    echo'<table class="w3-table-all w3-hoverable w3-text-dark-grey">';
    echo'<tr class="w3-blue"> <h2 class="w3-blue">8º ANO A</h2>';
    echo'<th class="w3-center">Nome</th>';
    echo'<th class="w3-center">Primeiro Semestre</th>';
    echo'<th class="w3-center">Segundo Semestre</th>';
    echo'</tr>';

    // Estrutura de repetição foreach
    foreach($alunos as $nome){
        echo '<tr>';
        echo '<td class="w3-center">'.$nome['nome'].'</td> '; 
        echo '<td class="w3-center">'.$nome['primeiroSemestre'].'</td> ';
        echo '<td class="w3-center">'.$nome['segundoSemestre'].'</td> ';
        echo '</tr>';
    }
    // Fim-foreach

    echo'</table>';
?>

</div> 
<!-- Fim da divisão principal -->
</body>
</html>