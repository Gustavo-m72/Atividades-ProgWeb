<?php

/*
2. Criar 2 vetores com 10 números 
inteiros cada. Gerar e imprimir um vetor dos números não comuns aos e vetores.

*/

$valor1 = array(1,2,3,3,3,4,5,6,7,8);
$valor2 = array(11,12,3,3,3,14,15,16,17,18);

//$x = 0;

$valor3 = array();
$aux = array();

for ($i=0; $i < sizeof($valor1); $i++) { 
   for ($j=0; $j <sizeof($valor2) ; $j++) { 
        if  ($valor1[$i] == $valor2[$j]) {
            $aux[] = $valor1[$i];
        }
   }
}

for ($i=0; $i < sizeof($aux); $i++) { 
    for ($j=0; $j <sizeof($valor1) ; $j++) { 
         if  ($valor1[$j] != $aux[$i]) {
             $valor3[] = $valor1[$j];
             $valor1 [$j] = $aux[$i];
         }
        if  ($valor2[$j] != $aux[$i]) {
            $valor3[] = $valor2[$j];
            $valor2 [$j] = $aux[$i];
        }
    }
 }

echo "array 3" . "<br>";
for ($i=0; $i <sizeof($valor3) ; $i++) { 
    echo $valor3[$i] . "<br>";
}

?>