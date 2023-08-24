<?php
/*
Lista 1
    
Analise os algoritmos abaixo, reescreva-os na linguagem PHP e diga o que será impresso na
tela ao serem executados:
*/

echo("A)" . "<br>");

$a = 10;

$b = 20;

echo("b = $b". "<br>");

$b = 5;

echo("a = $a b = $b". "<br>");

echo("B)" . "<br>");

$a = 30;

$b = 20;

$c = $a + $b;

echo("c = $c". "<br>");

$b = 10;

echo("b = $b c = $c". "<br>");

$c = $a + $b;

echo("a = $a b = $b c = $c". "<br>");

echo("C)" . "<br>");

$a = 10;
$b = 20;


$c = $a;

$a = $b;

$b = $c;

echo ("a = $a, b = $b, c = $c" . "<br>");


echo("D)" . "<br>");

$a = 10;

$b = $a + 1;

$a = $b + 1;

$b = $a + 1;

echo $a . "<br>";

$a = $b + 1;

echo $a . "<br>" . $b . "<br>";

echo("E)" . "<br>"); 



$a = 10;

$b = 5;

$c = $a + $b;

$a = 20;

$b = 10;

echo ("a = $a, b = $b, c = $c" . "<br>");

echo("F)" . "<br>"); 

$x  = 1;

$y = 2;

$z = $y - $x;

echo $z . "<br>";

$x  = 5;

$y = $x + $z;

echo $x,$y,$z;

?>