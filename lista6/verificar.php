<?php

/*

3. Faça uma página HTML na qual o usuário deve um valor no intervalo de 5 a 50. Chame um programa PHP que verifique se o valor está no intervalo. Caso não esteja, retorne à página de origem para redigitação. Se estiver correto, chame uma função para que calcule e apresente a tabuada do número no formato apresentado no exemplo:
Tabuada do número: 7 
7 * 0 = 0
7 * 1 = 7
 ..... 
7 * 10 = 70


*/
 include("atividade3.php");

   
       
            if ($op > 50 || $op < 0) {
                header('location: atividade3.php');
                exit();
            }else {
                for ($i=0; $i <= 10; $i++) { 
                    echo "$i * $op = " . $i * $op . "<br>";
                }
            }



?>