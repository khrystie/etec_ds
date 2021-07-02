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
<meta name="viewport" content="width=device-width, initial-scale= 1.0">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Madeira e Cia Ltda.</title>
</head>
<body>
    <div class="w3-container w3-indigo">
        <h2>Forma de pagamento</h2>
    </div>
    <!-- formulário início -->
    <form class="w3-container" method="post" action="formPagamentoAction.php">
        <label class="w3-text-indigo"><b>Nome do Cliente</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">

        <label class="w3-text-indigo"><b>Valor  da Compra</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtValorCompra" type="number" step="0.01">

        <label class="w3-text-indigo"><b>Escolha a forma de Pagamento:</b></label>
            <!-- início opções de pagamento-->
            <select class="w3-input w3-border w3-light-grey"  name = "cmbPag">
                <option value="cartaoCredito">Cartão de Crédito</option>
                <option value="boleto">Boleto</option>
                <option value="deposito" selected>Depósito</option>
            </select>
            <!-- fim opções de pagamento-->
        <br>
        <button class="w3-btn w3-light-blue">Enviar</button>
        <!-- formulário fim -->
    </form>
</body>
</html>
