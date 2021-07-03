<!-- 
		Programação: Lista com os nomes dos estados do Brasil e siglas usando array e foreach.
		Tag: laço de repetição para, array, array associativo
		Data: 12/03/2021
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados e Siglas</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<body>

<!-- Início divisão principal -->    
<div class="w3-third w3-center w3-display-topmiddle w3-animate-top w3-padding"> 

<!-- Início php -->
<?php 
    // Conteúdo de cada linha
    $estados = array(
    array("estado"=> "Acre", "sigla"=> "AC"),
    array("estado"=> "Alagoas", "sigla"=> "AL"),
    array("estado"=> "Amapá", "sigla"=> "AP"),
    array("estado"=> "Amazonas", "sigla"=> "AM"),
    array("estado"=> "Bahia", "sigla"=> "BA"),
    array("estado"=> "Ceará", "sigla"=> "CE"),
    array("estado"=> "Distrito Federal", "sigla"=> "DF"),
    array("estado"=> "Espírito Santo", "sigla"=> "ES"),
    array("estado"=> "Goiás", "sigla"=> "GO"),
    array("estado"=> "Maranhão", "sigla"=> "MA"),
    array("estado"=> "Mato Grosso", "sigla"=> "MT"),
    array("estado"=> "Mato Grosso do Sul", "sigla"=> "MS"),
    array("estado"=> "Minas Gerais", "sigla"=> "MG"),
    array("estado"=> "Pará", "sigla"=> "PA"),
    array("estado"=> "Paraíba", "sigla"=> "PB"),
    array("estado"=> "Paraná", "sigla"=> "PR"),
    array("estado"=> "Pernambuco", "sigla"=> "PE"),
    array("estado"=> "Piauí", "sigla"=> "PI"),
    array("estado"=> "Rondônia", "sigla"=> "RO"),
    array("estado"=> "Roraima", "sigla"=> "RR"),
    array("estado"=> "Rio de Janeiro", "sigla"=> "RJ"),
    array("estado"=> "Rio Grande do Norte", "sigla"=> "RN"),
    array("estado"=> "Rio Grande do Sul", "sigla"=> "RS"),
    array("estado"=> "Santa Catarina", "sigla"=> "SC"),
    array("estado"=> "São Paulo", "sigla"=> "SP"),
    array("estado"=> "Sergipe", "sigla"=> "SE"),
    array("estado"=> "Tocantins", "sigla"=> "TO"),
);

    // Títulos das colunas 
    echo'<table class="w3-table-all w3-hoverable w3-text-black">';
        echo'<tr class="w3-indigo">';
             echo'<th class="w3-center">Estado</th>';
            echo'<th class="w3-center">Sigla</th>';
        echo'</tr>';

    foreach($estados as $estado){
        echo '<tr>';
            echo '<td class="w3-center">'.$estado['estado'].'</td> '; 
            echo '<td class="w3-center">'.$estado['sigla'].'</td> ';
        echo '</tr>';
    }
    
    echo'</table>';
?>

</div> 
<!-- Fim da divisão principal -->

</body>
</html>