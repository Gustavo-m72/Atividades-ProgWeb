
<?php


/*
Lista 4
    
5. Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, o
percentual de números pares e a média dos elementos do vetor

*/


$vet = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$par = 0;
$impar = 0;
$soma = 0;
for ($i=0; $i < sizeof($vet); $i++) { 
    
    $soma += $vet[$i];

    if ($vet[$i] % 2 != 0) {
        $par++;
    }else $impar;
}

$porcentagem = ($par * 100) / sizeof($vet);

echo "porcentagem " . $porcentagem . "<br>";
echo "media " . $soma/sizeof($vet);

?>