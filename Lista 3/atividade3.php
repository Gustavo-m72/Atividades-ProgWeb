<?php
/*
Lista 2
    
3. Dado um limite inferior e superior, calcule a soma de todos os números
pares contidos nesse intervalo. 
*/

$inferior = $_POST['inf'];


$superior = $_POST['sup'];

$soma = 0;

for ($i = $inferior; $i<= $superior; $i++){
    
    $soma+= $i;
}

echo $soma;

?>

<html>

<body>
<form action= "" method="post">
    <input type = "number" name="sup">  superior <br>
    <input type = "number" name="inf">  inferior <br>

        <button type = "submit"> enviar
</button>
</form>
</body>
</html>