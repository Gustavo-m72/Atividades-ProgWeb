<?php
/*
Lista 2
    
9. Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou
se não é divisível por nenhum destes 
*/

    $N1 = $_POST['caju'];



    
    if($N1%2 == 0) echo "divisivel por 2" . "<br>";
    if($N1%5 == 0) echo "divisivel por 5" . "<br>";
    if($N1%10 == 0) echo "divisivel por 10" . "<br>";
    if($N1%2 != 0 && $N1%5 != 0 && $N1%10 != 0) echo "divisivel por nenhum" . "<br>";





?>

<html>

<body>
<form action= "" method="post">
    <input type = "number" name="caju"> <br>

        <button type = "submit"> enviar
</button>
</form>
</body>
</html>