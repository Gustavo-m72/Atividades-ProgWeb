<html>

<body>
<form action= "" method="post">
    <input type = "number" name="num1"> nota1 <br>
    <input type = "number" name="num2"> nota2 <br>
        <button type = "submit"> Média final
        <button type = "submit"> Situação
</button>
</form>
</body>
</html>


<?php


/*
Lista 4
    
8. Escrever o mesmo script acima, entretanto, usando uma função para calcular a
média das notas.
*/


function media ($num1, $num2){

    return $media = ($num1 + $num2) / 2;
}

function conceito ($media){

    if ($media >= 7) {
        echo "aprovado";
    } else {
        echo "reprovado";
    }
}


$num1 = $_POST['num1'];
$num2 = $_POST['num2'];





?>