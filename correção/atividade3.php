<?php

    /*
5. (3.0) Supondo-se que as informações sobre compras de estoque de produtos de uma
loja estejam armazenadas em uma matriz, conforme exemplo abaixo (Matriz 6x4):
    */

    $produto = array(
        'id' => array("produto1", "produto2", "produto3", "produto4", "produto5", "produto6"),
        'unidades' => array(200, 100, 100, 100, 300, 200),
        'preco_unitario' => array(10,10.50,11,12,14,15),
        'preco_total' => array(2000,1050,1100,1200,4200,3000)

    );
    for ($i=0; $i < sizeof($produto) ; $i++) { 
        if ($produto['id'][$i]== "produto3") {
            echo "o produto " .  $produto['id'][$i] . " teve unidades compradas " . $produto['unidades'][$i] . " valor unitario R$" . $produto['preco_unitario'][$i] . " valor total R$" . $produto['preco_total'][$i] . "<br>";
        }
       
    }

    $maior = $produto['unidades'][0];
    $indice = 0;

    for ($i=1; $i <sizeof($produto['id'])  ; $i++) { 
        if ($maior < $produto['unidades'][$i]) {
            $maior = $produto['unidades'][$i];
            $indice = $i;
        }
    }

    echo "o produto de maior unidades compradas eh " .  $produto['id'][$indice] . " teve unidades compradas " . $produto['unidades'][$indice] . " valor unitario R$" . $produto['preco_unitario'][$indice] . " valor total R$" . $produto['preco_total'][$indice] . "<br>";

    $maior = $produto['preco_unitario'][0];
    $indice = 0;

    for ($i=1; $i <sizeof($produto['id'])  ; $i++) { 
        if ($maior < $produto['preco_unitario'][$i]) {
            $maior = $produto['preco_unitario'][$i];
            $indice = $i;
        }
    }

    echo "o produto de maior custo unitario eh " .  $produto['id'][$indice] . " teve unidades compradas " . $produto['unidades'][$indice] . " valor unitario R$" . $produto['preco_unitario'][$indice] . " valor total R$" . $produto['preco_total'][$indice] . "<br>";

    $soma = 0;
    $produtos = 0;

    for ($i=0; $i < sizeof($produto['id']); $i++) { 
        $soma += $produto['unidades'][$i];
        $produtos++;
    }

    echo "a media dos produtos eh " . $soma/$produtos . "<br>";


?>