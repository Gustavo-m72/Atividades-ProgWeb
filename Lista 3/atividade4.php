<?php
/*
Lista 2
    
4. Ler um valor e escrever se é positivo, negativo ou zero.
*/

    $N1 = $_POST['number'];


    if($N1 == 0){
        echo "zero";
    } elseif ($N1 > 0){
        echo "maior que zero";
    } 
    if ($N1 < 0)
        echo "menor que zero";

?>

<html>

<body>
<form action= "" method="post">
    <input type = "number" name="number"> <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html>