<!-- 
            Programa:   Formulário de pagamento. Exibe dados e valor do desconto de acordo com a forma de pagamento selecionada.   
            Atividade avaliativa da agenda 3 da matéria de DS II  
            Curso de Desenvolvimento de Sistemas da Etec de EaD
            Tags: label, input, button, method post, option, isset, elseif 
            Data: 28/02/2021
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Madeira e Cia Ltda.</title>
</head>
<body>
<div class="w3-container w3-indigo">
<h2>PROMOÇÃO DE MÊS DE ANIVERSÁRIO! </h2>
<?php
  $txtNome = isset($_POST['txtNome']) ? $_POST['txtNome'] : "Nome não informado";
  $txtValorCompra = isset($_POST['txtValorCompra']) ? $_POST['txtValorCompra'] : "Valor não informado";
  $cmbPag = isset($_POST['cmbPag']) ? $_POST['cmbPag'] : "Campo não foi escolhido";
  
  $resultado='';
  $porcentagem='';
  $desconto='';
  $final='';
  
    if($cmbPag == "boleto" ) {  
      $porcentagem = "8";
    } 

    elseif($cmbPag == "deposito" ){  
      $porcentagem = "10"; 
    }

    else {
      $porcentagem = "0";
      $cmbPag = "Cartão de Crédito";
    }
 
  $desconto = ($txtValorCompra*$porcentagem)/100;
  $final = $txtValorCompra-$desconto; 

  echo "$txtNome !<br>";
  echo "Valor da compra sem desconto: R$ $txtValorCompra <br>
  Forma de pagamento escolhida: $cmbPag <br>
  Desconto de $porcentagem % <br> 
  Você economizou: R$ $desconto <br>
  Valor `a pagar: R$ $final <br>
  ";

  /* 
  operador ternário 
  echo $cmbPag == 'boleto' ? "1":"2"; */

?>
  <br>
  <a href="javascript:void(0)" onClick="history.go(-1); return false;">Voltar para página anterior</a>

</div>
</body>
</html>
