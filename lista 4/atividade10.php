<?php


/*
Lista 4
    
10. Dados o vetor (Maçã, Banana, Pera, Uva), verifique se a string “Uva” encontrase dentro do vetor. Mostre na tela a mensagem “String encontrada”, caso a
palavra contar no vetor, caso contrário, mostre a mensagem “String não
encontrada”

*/


$vet = array("Maçã", "Banana", "Pera", "Uva");
$chave = "Uva";
$identificador = 0;
for ($i=0; $i < sizeof($vet); $i++) { 
    

    if ($vet[$i] = $chave) {
        $identificador++;
    }
}

if ($identificador != 0) {
    echo "String encontrada";
}else {
    "String não encontrada";
}

?>