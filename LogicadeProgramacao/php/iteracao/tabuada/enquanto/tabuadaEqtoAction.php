<!-- 
        Programa: exibe a tabuada do número digitado no formulário.
        Tag: laço de repetição enquanto
        Data: 28/02/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Tabuada</title> </head>
<body class="w3-light-gray">
<?php 
    // voltar para página anterior
     echo '<a href="javascript:void(0)" onClick="history.go(-1); return false;" class="w3-button w3-indigo">Voltar</a><br>'; 
    // entrada
    $v = $_POST["txtNumero"];  
     // divisão fundo indigo
    echo '<div class="w3-quarter w3-display-middle w3-responsive w3-indigo">'; 
        // célula       
        echo '<table class="w3-table-all w3-hoverable w3-text-black">'; 
        // fundo título            
            echo '<tr class="w3-indigo">'; 
                // título texto
                echo '<th class="w3-center"> Tabuada do '.$v.'</th>'; 
            echo '</tr>';
            
            $i = 0;
            while($i<=10) { 
                echo '<tr>';
                    echo '<td class="w3-center">'
                    .$v.' X '.$i.' = '.$v*$i.'
                    </td>'; 
                echo '</tr>';
                $i++;
            }  

        echo '</table>'; // final tabela
    echo '</div>'; // final divisão fundo verde
    ?>

    <br>
    
</body>
</html>
