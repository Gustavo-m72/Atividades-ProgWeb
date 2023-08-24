<?php

    /*
1. Supondo-se que as informações sobre as vendas do 1º semestre de uma loja de confecções estejam armazenadas em uma matriz, conforme exemplo abaixo (Matriz 7x6):
















Escrever um programa que calcule e escreva:

a) A quantidade total de camisas vendidas no semestre; 
b) A quantidade total (todos os produtos) vendidos no semestre; 
c) A quantidade de sapatos vendidos nos meses de janeiro e fevereiro;
d) Qual o produto mais vendido no mês de janeiro? e
e) Qual o mês em que a venda de sapatos foi maior? 
    */

    $produto = array(
        'camisas' => array(10, 5, 15, 15, 20, 25),
        'bermudas' => array(20, 5, 3, 4, 2, 3),
        'camisetas' => array(30,20,10,5,6,5),
        'sapatos' => array(2,3,15,15,20,30),
        'tenis' => array(8,15,12,10,20,22),
        'saias' => array(15,5,4,3,4,5),
        'vestidos' => array(10,10,4,5,4,2)
    );

    $qtd = 0;

    for ($i=0; $i < sizeof($produto['camisas']) ; $i++) { 
        $qtd += $produto['camisas'][$i];
    }

    echo "total de camisas vendidas no semestre $qtd" . "<br>";
    $produtos = array("camisas", "bermudas", "camisetas","sapatos", "tenis","saias", "vestidos");

    $somaprodutos = 0;

    for ($i=0; $i < 7  ; $i++) { 
       for ($j=0; $j < 6; $j++) { 
            $somaprodutos += $produto[$produtos[$i]][$j];
           
       } 
    }

    echo "a soma de todos os produtos eh $somaprodutos" . "<br>";

    $qtdsapatos = 0;

    for ($i=0; $i <= 1 ; $i++) { 
        $qtdsapatos += $produto['sapatos'][$i];
    }

    echo "a quantidade de sapatos vendidas em janeiro e fevereiro $qtdsapatos" . "<br>";

    $maior = 0;
    $indice = 0;


        for ($j=0; $j < 7; $j++) { 
            if ($maior < $produto[$produtos[$j]][0]) {
                $indice = $produtos[$j];
                $maior = $produto[$produtos[$j]][0];
            }
        }

echo "produto mais vendido de janeiro " . $indice . "<br>";

$maior = 0;
    $indice = 0;


        for ($j=0; $j < 6; $j++) { 
            if ($maior < $produto['sapatos'][$j]) {
                $indice = $j;
                $maior = $produto['sapatos'][$j];
            }
        }

echo "o mes com mais vendas de sapatos " . $indice + 1 . "<br>";


?>