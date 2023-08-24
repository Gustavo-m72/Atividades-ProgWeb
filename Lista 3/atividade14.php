<?php
/*
Lista 2
    
14. Criar um algoritmos que imprima a tabuada de um número
*/


$valor = $_POST['valor'];





for ($i = 0; $i <= 10; $i++){
    
    echo $i . "*" . $valor . "=" . $i * $valor . "<br>";
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