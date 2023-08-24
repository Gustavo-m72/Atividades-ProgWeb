<?php
/*
Lista 2
    
1. Entre com 4 números inteiros e calcule a soma dos que forem par.
*/

    $N1 = $_POST['caju'];
    $N2 = $_POST['caju2'];
    $N3 = $_POST['caju3'];
    $N4 = $_POST['caju4'];

    $soma = 0;

    
    if($N1%2 == 0) $soma+= $N1;
    if($N2%2 == 0) $soma+= $N2;
    if($N3%2 == 0) $soma+= $N3;
    if($N4%2 == 0) $soma+= $N4;

    echo $N1, $N2, $N3, $N4;



?>

<html>

<body>
<form action= "" method="post">
    <input type = "number" name="caju"> <br>
        
    <input type = "number" name="caju2"> <br> 
    <input type = "number" name="caju3"> <br>
    <input type = "number" name="caju4"> <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html>