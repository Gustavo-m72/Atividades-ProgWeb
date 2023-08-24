<?php
/*
Lista 2
    
15. Criar um algoritmos que entre com uma palavra e imprima conforme o
exemplo ◦ Palavra: sonho
◦ SONHO
◦ SONHO SONHO
◦ SONHO SONHO SONHO
◦ SONHO SONHO SONHO SONHO
*/


$palavra = $_POST['valor'];





for ($i = 0; $i <= 4; $i++){
   
    for($x = 0; $x < $i; $x++){

        echo $palavra . " ";

    }
    echo "<br>";
}


?>

<html>

<body>
<form action= "" method="post">
    <input type = "text" name="valor"> <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html>