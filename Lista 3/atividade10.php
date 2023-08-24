<?php
/*
Lista 2
    
10.Entrar com 3 números e imprimi-los em ordem decrescente (suponha
números diferentes) 
*/

    $N1 = $_POST['caju'];
    $N2 = $_POST['caju2'];
    $N3 = $_POST['caju3'];

    $ordem = array($N1,$N2,$N3);

    rsort($ordem);
    foreach($ordem as $decre){

        echo $decre . "<br>";

    }

?>

<html>

<body>
<form action= "" method="post">
    <input type = "number" name="caju"> <br>
    <input type = "number" name="caju2"> <br> 
    <input type = "number" name="caju3"> <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html>