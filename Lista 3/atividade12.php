<?php
/*
Lista 2
    
12. Entrar com o número de vezes que se deseja imprimir a palavra SOL e
imprimir
*/


$valor = $_POST['valor'];





for ($i = 0; $i < $valor; $i++){
    
    echo "SOL" . "<br>";
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