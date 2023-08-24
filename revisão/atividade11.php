<?php


/*
Lista 4
    
11. Construa um array multimensional com os dados da tabela abaixo. Em seguida,
imprima na tela, o nome e sobrenome do cliente, sexo e data de nascimento.

12. Com base na matriz construída no exercício anterior, liste o nome das pessoas que
nasceram no mês de Junho


13. Liste os clientes com o sobreno de Facello.
*/



$vet =array(
    'nome' => array("Georgi","Bezalel","Parto","Chirstian","Kyoichi","Anneke", "Tzvetan"),
    'sobrenome' => array("Facello","Simmel","Bamford","Koblick","Maliniak", "Preusig", "Zielinski"),
    'data'=> array("26/06/1986","21/11/1985","28/08/1986","01/12/1986","12/09/1989","02/06/1989","10/02/1989")
);





for ($i=0; $i < sizeof($vet); $i++) { 
    echo $vet['nome'][$i] . " ";
    echo $vet['sobrenome'][$i]. " ";
    echo $vet['data'][$i]. " ";
    echo "<br>";
}

echo "<br>";


for ($i=0; $i < sizeof($vet); $i++) { 
    if ($vet['sobrenome'][$i] === "Facello") {
    echo $vet['nome'][$i] . " ";
    echo $vet['sobrenome'][$i]. " ";
    echo $vet['data'][$i]. " ";
    echo "<br>";
    }
}

for ($i=0; $i < sizeof($vet); $i++) { 
    $data = explode('/', $vet['data'][$i]);
    
    if ($data[1] == 06) {
    echo $vet['nome'][$i] . " ";
    echo $vet['sobrenome'][$i]. " ";
    echo $vet['data'][$i]. " ";
    echo "<br>";
    }
}



?>