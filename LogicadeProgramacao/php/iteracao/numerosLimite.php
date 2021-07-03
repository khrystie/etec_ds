<!-- 
        Programa: usuário digita 2 números, sendo 1 o início de uma sequência, e o outro, o final da sequência.   Imprimir a sequência entre esses dois números
        Tag: for, elseif, break
        Data: 15/03/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
     <style>
     ::selection {
       background: grey;  
     }
     </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
 
 <?php

$valor1 = 5;
$valor2 = 10;

if ($valor1<$valor2){
    echo $valor1 .'<br>'; 

    for($i=0; $i<=$valor2; $i++) {
        $valor1 +=1; 
        echo $valor1  .' <br>';
          if($valor1>=$valor2) 
            break;
  }
} elseif ($valor1>$valor2) {
    echo $valor1 .'<br>'; 

    for($i=0; $i<=$valor2; $i++) {
        $valor1 -=1; 
        echo $valor1  .' <br>';
          if($valor1<=$valor2) 
            break;
  }

} elseif ($valor1=$valor2){
  echo $valor1;
}
?>
   
</body>
</html>
