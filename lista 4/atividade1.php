

<html>

<body>
<form action= "" method="post">
    <input type = "text" name="palavra1"> palavra1 <br>
    <input type = "text" name="palavra2"> palavra2 <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html>


<?php


/*
Lista 4
    
1. Entrar com duas strings e imprimir a mensagem ‘Strings iguais’, caso as strings
sejam iguais

*/


$palavra1 = $_POST['palavra1'];

$palavra2 = $_POST['palavra2'];

if (strcmp($palavra1, $palavra2) == 0){
    echo "iguais";
} else echo "diferente";




?>