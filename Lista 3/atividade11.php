<?php
/*
Lista 2
    
7. Faça uma calculadora onde o usuário entra com 2 valores e a operação a
ser realizada. Em seguida, o resultado da operação deve ser apresentado na
tela. A calculadora deve conter no mínimo as quatro operações básicas: Soma,
Subtração, Multiplicação e Divisão. Criar uma função para cada operação.


*/



$op= $_POST['op'];


switch ($op) {
    case '1':
        echo "janeiro". "<br>";
        break;
    
    case '2':
        echo "fevereiro" . "<br>";
        break;    
    
    case '3':
        echo "março" . "<br>";
        break;

    case '4':
        echo "abril" . "<br>";
        break;

    case '5':
        echo "maio" . "<br>";
        break;
    
    case '6':
        echo "junho" . "<br>";
        break;    
    
    case '7':
        echo "julho" . "<br>";
        break;

    case '8':
        echo "agosto" . "<br>";
        break;

    case '9':
        echo "setembro" . "<br>";
        break;
    
    case '10':
        echo "outubro" . "<br>";
        break;    
    
    case '11':
        echo "novembro" . "<br>";
        break;

    case '12':
        echo "dezembro" . "<br>";
        break;
    
        default:
        echo "vai só de 1 até 12, não tem $op" . "<br>";
        break;
}


?>

<html>

<body>
<form action= "" method="post">
    <input type = "number" name="op"> operação <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html