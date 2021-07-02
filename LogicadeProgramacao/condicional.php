<!-- 
    Arquivo com estruturas de lógica de programação em php.
    Tags: if, elseif, while, for, vetor, foreach 
    DSII Ag3 
    Data: 27/02/2021 
-->
<?php
$n1 = 1;
$n2 =3;

$n3 = '';

if($n1 > $n2) {
 $n3 =  'aprovado'; 
} elseif ($n2 == 3){
$n3 = 'n1 é maior que n2, n2 é igual a 3';
}
else {
$n3 = '0';}

echo $n3;

while($n1<$n2) {
    echo "Por equanto n1 eh menor que n2"."<br>";
    break;
} 

$contador = -9;
while($contador < 10) {
    echo $contador ."<br>";
    $contador ++;
}

$contador2 = 1;


for($contador2 = 0; $contador2 < 10; $contador2++)
{
echo "<br> $contador2   separa <br>" ;
}

echo "<br>";

$vetor = array(1, 2, 3, 4, 5);
for($i = 0; $i < 5; $i++)
{
  $item = $vetor[$i];
echo $item;
}
echo "<br>";

$vetor = array(1, 2, 3, 4, 5);
foreach($vetor as $item)
{
echo $item;
}

?>