<?php
/*
Lista 1
    
    1. Escreva um programa que leia 3 notas de um aluno e a média das notas dos exercícios realizados
por ele. Calcular a média de aproveitamento, usando a fórmula: MA = (N1 + N2*2 + N3*3 +
ME)/7. A partir da média, informar o conceito de acordo com a tabela:

A - maior ou igual a 9
B - maior ou igual a 7.5 e menor que 9
C - maior ou igual a 6 e menor que 7.5
D - maior ou igual a 4 e menor que 6
E - menor que 4 

*/

$N1 = 7;

$N2 = 7;

$N3 = 7;

$ME = 7;

$MA = ($N1 + $N2*2 +$N3*3 + $ME)/7;


if($MA >= 9) echo ("A");

if($MA >= 7.5 && $MA < 9) echo ("B");

if($MA >= 6 && $MA < 7.5) echo ("C");

if($MA >= 4 && $MA < 6) echo ("D");

if($MA < 4) echo ("E");

?>