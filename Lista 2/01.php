<?php
/*
Lista 1
    
    Escreva um algoritmo que armazene o valor 10 em uma variável A e o valor 20 em uma
variável B. A seguir (utilizando apenas atribuições entre variáveis) troque os seus conteúdos
fazendo com que o valor que está em A passe para B e vice-versa. Ao final, escrever os valores
que ficaram armazenados nas variáveis.

*/


$a = 10;
$b = 20;

echo ("original a = $a, b = $b" . "<br>");

$mediador = $a;

$a = $b;

$b = $mediador;

echo ("a = $a, b = $b");
?>