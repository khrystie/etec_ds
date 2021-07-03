<!--     
            Programa: Três formas de visualizar tabuada: escolher número, digitar número e mostrar tabuadas.
            Tag: elseif, laço de repetição para
            Data: 28/02/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="w3-light-gray">

<?php
    // link para voltar para página anterior
    echo '<br><a href="javascript:void(0)" onClick="history.go(-1); return false;" class="w3-button w3-indigo">Voltar</a><br>';

        $t = -0; // isset = -1 

        if(isset($_POST["btn0"]))  // condição 
            $t = 0; 
        elseif(isset($_POST["btn1"])) // senão
            $t = 1; 
        elseif(isset($_POST["btn2"])) // senão...
            $t = 2; 
        elseif(isset($_POST["btn3"]))
            $t = 3;
        elseif(isset($_POST["btn4"]))
            $t = 4;
        elseif(isset($_POST["btn5"]))
            $t = 5;
        elseif(isset($_POST["btn6"]))
            $t = 6;
        elseif(isset($_POST["btn7"]))
            $t = 7;
        elseif(isset($_POST["btn8"]))
            $t = 8;
        elseif(isset($_POST["btn9"]))
            $t = 9;

        // Fundo indigo, divisão centralizada
        echo '<div class="w3-quarter w3-display-middle w3-responsive w3-indigo w3-padding">';
            // Tabela 
            echo '<table class="w3-table-all w3-hoverable w3-text-indigo">';
            // Define célula cabeçalho do grupo de células (título da tabuada)
                echo '<tr class="w3-amber">'; 
                    echo '<th class="w3-center"> Tabuada do '.$t.'</th>'; 
                echo '</tr>';

                // laço de repetição for
                for($i = 0; $i<=10; $i++) {
                    echo '<tr>';
                        echo '<td class="w3-center">'.$t.' X '.$i.' = '.$t*$i.'</td>';
                    echo '</tr>';
                } 
                // fim-laço

        /* 
                se btn0 = 0, então t= 0 
                [i=0, 0<=10         (V)]   ------> 0 x 0 = 0*0 = 0  
                [i=0+1 i=1 1<=10    (V)]   ------> 0 + 1 = 0*1 = 0
                [i=1+1 i=2 2<=10    (V)]   ------> 0 + 2 = 0*2 = 0
                
        */
            echo '</table>'; // Fim tabela
        echo '</div>'; // Fim divisão indigo
?>

</body>
</html>