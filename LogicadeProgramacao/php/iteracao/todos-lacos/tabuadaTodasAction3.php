<!--     
            Programa: Três formas de visualizar tabuada: escolher número, digitar número e mostrar tabuadas.
            Tag: elseif, laço de repetição enquanto-faça
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
<body>

<?php            
    // data
    echo '<h3 class="w3-indigo w3-padding">';
    echo date('l jS \of F Y h:i:s A');
    echo '</h3>';

    echo '<a href="javascript:void(0);" onClick="history.go(-1)"; return="false">Voltar <br><br></a>';
    // página anterior 

    // conteúdo principal
            $i=0;
            $j=0;
            //início-se
            if (isset($_POST["tab"])) { 
        
                //primeiro bloco  

                do {

                        // segundo bloco   
                        echo '<div class="w3-quarter w3-light-grey w3-responsive w3-padding">'; 
                        echo '<table class="w3-table-all w3-hoverable">';
                        echo '<tr class="w3-indigo">';
                        echo '<th class="w3-center">Tabuada do '. $j .'</th><br>' ; 
                        echo '</tr>';  
                
                        $i=0; //começo da multiplicação da tabuada (geralmente começa com 0 ou 1)
                        do { 
                            echo '<tr>';
                            echo '<td class="w3-center">'. $j .'x'.$i.' =  '.$j*$i .'</td>';
                            echo '</tr>';
                            /* estrutura de repetição de cada tabela 
                                0 x 0 = 0
                                0 x 1 = 0
                                [...]
                                0 x 10 = 0
                            */
                            $i++;
                        } while($i<=10); 
                        //fim segundo bloco
                        echo('</table>');
                        echo '</div>';
                     
                /* primeiro bloco faz a repetição das tabelas de tabuada 
                    tabuada do 0
                    tabuada do 1
                    tabuada do 2 
                    [...]
                    tabuada do 10
                */
                $j++; 
                } while($j<=10); 
                //fim primeiro bloco               
            } //fim-se

        
?>    
</body>
</html>