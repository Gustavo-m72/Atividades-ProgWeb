

<html>

<body>
<form action= "" method="post">
    <input type = "text" name="palavra1"> palavra1 <br>
    <input type = "text" name="chave"> chave <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html>


<?php


/*
Lista 4
    
2. Efetue um algoritmo PHP que receba uma string e um caracter de busca e
descubra o número de ocorrências deste caracter dentro da string. Para isso
utilize laço de repetição, e as funções de string “strlen” e “substr”

*/


$palavra1 = $_POST['palavra1'];
$chave = $_POST['chave'];
$x = 0;
for ($i=0; $i <= strlen($palavra1); $i++) { 
    echo substr($palavra1, $i, $i) . "<br>";
    if (substr($palavra1, $i, $i) == $chave){
        $x++;
    }

}

echo $x;



?>