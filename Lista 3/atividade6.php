<?php
/*
Lista 2
    
6. Efetue um algoritmo em PHP que receba um valor qualquer e imprima os
valores de 0 até o valor recebido, exemplo:
 • Valor recebido = 9
 • Impressão do programa – 0 1 2 3 4 5 6 7 8 9
*/


$valor = $_POST['valor'];





for ($i = 0; $i<= $valor; $i++){
    
    echo $i . "<br>";
}


?>

<html>

<body>
<form action= "" method="post">
    <input type = "number" name="valor"> <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html>