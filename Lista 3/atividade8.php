<?php
/*
Lista 2
    
8. Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor
somado seja maior que 20, este deverá ser apresentando somando-se a ele
mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser
apresentado subtraindo-se 5.


*/





$val1 = $_POST['valor1'];

$val2 =  $_POST['valor2'];

$soma = $val1 + $val2;

if ($soma > 20){ 
    echo $soma + 8;
}
else echo $soma -5;

?>

<html>

<body>
<form action= "" method="post">
    <input type = "number" name="valor1"> valor 1 <br>
    <input type = "number" name="valor2"> valor 2 <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html

