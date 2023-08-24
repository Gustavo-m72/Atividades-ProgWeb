<?php


/*
Lista 4
    
6. Criar um algoritmo com uma matriz 5x5 e imprimir: toda a matriz, a matriz
gerada só com números ímpares e outra só com números pares

*/


$vet =array(array(1,2,3,4,5),
            array(6,7,8,9,10),
            array(11,12,13,14,15),
            array(16,17,18,19,20));



for ($i=0; $i < sizeof($vet); $i++) { 
    for ($j=0; $j< 5; $j++) { 
        if ($vet[$i][$j] % 2 != 0) {
            echo $vet[$i][$j] . " ";
            

        }
        //echo "<br>";
    }
    echo "<br>";
}

echo "<br>";

for ($i=0; $i < sizeof($vet); $i++) { 
    for ($j=0; $j< 5; $j++) { 
        if ($vet[$i][$j] % 2 == 0) {
            echo $vet[$i][$j] . " ";
            

        }
        //echo "<br>";
    }
    echo "<br>";
}


?>