<?php
/*
Lista 2
    
5. Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo
feminino e tiver menos que 25 anos, imprimir o nome e a mensagem:
ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.

*/

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];

    if($sexo == 'f' && $idade < 25){
        echo "ACEITA";
    } else echo "NAO ACEITA"
?>

<html>

<body>
<form action= "" method="post">
    <input type = "text" name="nome"> nome <br>
    <input type = "text" name="sexo"> sexo <br>
    <input type = "number" name="idade"> idade <br>
        <button type = "submit"> enviar
</button>
</form>
</body>
</html>