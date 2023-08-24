<html>

<body>
<form action= "" method="post">
    <input type = "number" name="num1"> nota1 <br>
    <input type = "number" name="num2"> nota2 <br>
        <button type = "submit"> Média final
        <button type = "submit"> Situação
</button>
</form>
</body>
</html>


<?php


/*
Lista 4
    
7. Escrever um script em PHP que receba as notas atribuídas no formulário HTML
e apresente ao usuário a média final, ao clicar no botão “Média Final” e
Aprovado ou Reprovado ao clicar no botão “Situação”. Considere a média >=7.
*/


$num1 = $_POST['num1'];
$num2 = $_POST['num2'];


$media = ($num1 + $num2) / 2; // media 7



echo $media;

if ($media >= 7) {
    echo "aprovado";
} else {
    echo "reprovado";
}


?>