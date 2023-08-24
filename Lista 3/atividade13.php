<?php
/*
Lista 2
    
13. Entrar com 20 números e imprimir a soma dos positivos e o total de
números negativos
*/


    $ar = array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
    $soma = 0;
    $nnegativos = 0;

    
   for($i = 0; $i < 20; $i++ ){

        if($ar[$i]>0) {
            $soma+= $ar[$i];
        }
        else $nnegativos++;
   }
   echo "soma $soma " . "<br>";
   echo "numero de negativos $nnegativos " . "<br>";
?>
