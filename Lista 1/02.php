<?php
/*
Lista 1
    
2. Escreva um algoritmo que leia um número inteiro. Se o número lido for positivo,escreva uma
mensagem indicando se ele é par ou ímpar. Se o número for negativo,escreva a seguinte mensagem
“Este número não é positivo”.


*/

$N1 = 5;




if($N1 < 0) echo ("Este número não é positivo" . "<br>");
    elseif($N1%2 == 0) echo ("PAR" . "<br>");
        else echo("IMPAR" . "<br>");

/*
if($N1 >= 0) echo ("POSITIVO" . "<br>");
else echo("NEGATIVO" . "<br>");

if($N1%2 == 0) echo ("PAR" . "<br>");
else echo("IMPAR" . "<br>");*/

?>