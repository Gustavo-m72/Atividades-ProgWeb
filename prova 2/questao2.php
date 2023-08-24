<?php

//aluno: Gustavo Manfio Stefanello
//2. (1.5) Supondo-se que as informações sobre as vendas do 1º semestre de uma loja de
//confecções estejam armazenadas em uma matriz, conforme exemplo abaixo (Matriz
//7x6):
/*
Escrever um programa que calcule e escreva:
a) A quantidade total de tênis vendidos no semestre; 
b) A quantidade total (todos os produtos) vendidos no semestre; 
c) A quantidade de sapatos vendidos nos meses de janeiro e fevereiro;
d) Qual o produto mais vendido no mês de janeiro? e
e) Qual o mês em que a venda de sapatos foi maior? 
*/

$produto = array(
    "camisas" => array(10,5,15,15,20,25),
    "bermudas" => array(20,5,3,4,2,3),
    "camisetas" => array(30,20,10,5,6,5),
    "sapatos" => array(2,3,15,15,20,30),
    "tenis" => array(8, 15, 12, 10, 20, 22),
    "saias" => array(15,5,4,3,4,5),
    "vestidos" => array(10,10,4,5,4,2)
);

//print_r($produto);

$totaltenis=0;

for ($i=0 ; $i < sizeof($produto['tenis']) ; $i++ ) { 
   $totaltenis +=  $produto['tenis'][$i];
}

echo "A) O total de tenis vendidos no semestre eh: " . $totaltenis . "<br>";

$total = 0;
for ($i=0 ; $i < sizeof($produto['tenis']) ; $i++ ) { 
    $total +=  $produto['camisas'][$i];
    $total +=  $produto['bermudas'][$i];
    $total +=  $produto['camisetas'][$i];
    $total +=  $produto['sapatos'][$i];
    $total +=  $produto['tenis'][$i];
    $total +=  $produto['saias'][$i];
    $total +=  $produto['vestidos'][$i];
 }
 
echo "B) O total de vendas no semestre eh: " . $total . "<br>";


$totaljanfev = 0;
for ($i=0 ; $i < 2 ; $i++ ) { 
    $totaljanfev +=  $produto['sapatos'][$i];
 }

echo "C) O total de sapatos em janeiro e fevereiro eh: " . $totaljanfev . "<br>";

$produtojan;
$maior = $produto['camisas'][0];
$produtos = array("camisas","bermudas","camisetas","sapatos","tenis","saias","vestidos");
for ($i=0 ; $i < 7 ; $i++ ) { 
    if ($maior<$produto[$produtos[$i]][0]) {
        $produtojan = $produtos[$i];
        $maior = $produto[$produtos[$i]][0];
    }

 }

echo "D) O  produto com mais vendas em janeiro eh : " . $produtojan . " com qtd vendas: " . $maior . "<br>";


$maior = 0;
$indice = 0;
$meses = array("jan","fev","mar","abr","maio","jun");
for ($i=0 ; $i < 6 ; $i++ ) { 
    if ($maior<$produto['sapatos'][$i]) {
        $indice = $i;
        $maior = $produto['sapatos'][$i];
    }

 }

echo "E) O  mes com mais vendas de sapatos eh: " . $meses[$indice] . " " .  $indice + 1 . " com qtd vendas: " . $maior . "<br>";

?>