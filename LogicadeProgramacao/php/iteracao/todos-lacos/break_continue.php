<!-- 
		Programa: Exemplo do uso de break e continue.
		Tags: laços de repetição enquanto e para, break, continue
		Data: 28/02/2021
-->

<?php
    $i = 0;
    //Loop infinito.
    while (true) {
         if ($i > 4) 
            break; // para de fazer o laço quando for maior que quatro
        echo $i."<br><br>";
        $i++;
    }
    
    // continue
    $j = 0;
    for($j = 0; $j <=10; $j++) {
        if ($j % 2 != 0)
            continue;  // continua o laço até até atender a condição j<=10
            echo $j."<br><br>";
    }

?>
