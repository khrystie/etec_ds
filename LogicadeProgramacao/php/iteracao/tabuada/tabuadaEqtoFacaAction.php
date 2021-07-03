<!-- 
        Programa: tabuada do 0 ao 10
        Tag: laço de repetição enquanto-faça
        Data: 13/03/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <title>Tabuada</title>
</head>
<body>
<?php
    // voltar página
    echo '<br><a href="javascript:void(0)" onClick="history.go(-1); return false;" class="w3-button w3-sand">Voltar</a><br>';

    // variáveis
    $i = 0; $j = 0;

    // primeira estrutura do-while   
    do  { 
        echo '<div class="w3-quarter w3-responsive w3-sand">';
            echo '<table class="w3-table-all w3-hoverable w3-text-black">'; 
                echo '<tr class="w3-sand">';
                    echo '<th class="w3-center"> Tabuada do '.$j.'</th>'; 
                echo '</tr>';
        $i = 0; /* segunda coluna da multiplicação   "reseta" o $i */
    // segunda estrutura do-while
    do  {
        echo '<tr>';
            echo '<td class="w3-center">'.$j.' X '.$i.' = '.$j*$i.'</td>';
        echo '</tr>';
        $i++;
    } while($i<=10); 
    //fim segunda estrutra
            echo '</table>';
        echo '</div>';
        $j++;
    }   while($j<=10); //fim primeira estrutura
?>
</body>
</html>