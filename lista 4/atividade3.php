<?php
/*
Lista 4
    
3. Fazer uma calculadora onde o usuário entra com 2 valores e a operação a ser
realizada. Em seguida, o resultado da operação deve ser apresentado na tela. A
calculadora deve conter no mínimo as três operações básicas: Soma, Subtração,
Multiplicação e Divisão. Usar função para cada operação e formulário para
entrada dos valores e operação

*/

function soma($val1, $val2){

    return $val1 + $val2;
}

function divisao($val1, $val2){

    return $val1 / $val2;
}

function multi($val1, $val2){

    return $val1 * $val2;
}

function sub($val1, $val2){

    return $val1 - $val2;
}


$op= $_POST['op'];

$val1 = $_POST['valor1'];

$val2 =  $_POST['valor2'];


switch ($op) {
    case '+':
        echo soma($val1, $val2) . "<br>";
        break;
    
    case '-':
        echo sub($val1, $val2) . "<br>";
        break;    
    
    case '*':
        echo multi($val1, $val2) . "<br>";
        break;

    case '/':
        echo divisao($val1, $val2) . "<br>";
        break;
    
        default:
        echo "operação invalida" . "<br>";
        break;
}


?>

<html>

<body>
<form action= "" method="post">
    <input type = "number" name="valor1"> valor 1 <br>
    <input type = "text" name="op"> operação <br>
    <input type = "number" name="valor2"> valor 2 <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html