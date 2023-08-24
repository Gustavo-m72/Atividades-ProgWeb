
<?php


/*
Lista 4
    
4. Dado um vetor A com 10 elementos inteiros e aleatórios entre 1 e 10. Preencha
um segundo vetor apenas com os elementos pares do primeiro vetor.


*/


$vet = array(1,2,3,4,5,6,7,8,9,10);
$vetimpar = array();
$x = 0;

for ($i=0; $i < sizeof($vet); $i++) { 
    if ($vet[$i] % 2 != 0) {
        array_push($vetimpar, $vet[$i]);
        $x++;
 
    }
}

print_r($vetimpar);

?>