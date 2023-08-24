<?php

/*

4. Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz, a matriz gerada só com números ímpares e outra só com números pares.


*/
$mat5p5 = array(
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(11,12,13,14,15),
    array(16,17,18,19,20),
    array(21,22,23,24,25)
);

echo "<br>" . "par" ."<br>";
for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        if ($mat5p5[$i][$j] % 2 == 0) {
            echo" " . $mat5p5[$i][$j] . " ";
        }
        
    }
    echo "<br>";
}

echo "<br>" . "impar" ."<br>";

for ($i=0; $i < 5; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        if ($mat5p5[$i][$j] % 2 != 0) {
            echo" " . $mat5p5[$i][$j] . " ";
        }
        
    }
    echo "<br>";
}

?>