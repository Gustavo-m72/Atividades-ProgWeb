<html>

<body>
<form action= "" method="post">
    <input type = "number" name="num1"> nota 1 <br>
    <input type = "number" name="num2"> nota 2 <br>
    <input type = "number" name="num3">  nota 3<br>
        <button type = "submit" name = "media_simples"> media simples
        <button type = "submit" name = "media_ponderada"> media ponderada
        </button>
    
</form>
</body>
</html>



<?php
/*
Lista revisão
    
3. Um usuário deseja um programa pelo qual possa escolher que tipo de média
deseja calcular a partir de três notas. Faça um algoritmo que leia as 3 notas
(0 á 10), a opção escolhida (1 ou 2) pelo usuário e calcule a média. Caso o
usuário escolher outra opção, apresente uma mensagem “Opção inválida”.
(USE A ESTRUTURA SWITCH-CASE):
a. Opção 1 – calcular a média aritmética
mediaaritmetica=
nota1+nota2+nota3
3
b. Opção 2 – calcular a média ponderada (com pesos 3, 3, 4 para as
respectivas notas)
mediaponderada=
nota1∗ 0.3+nota2∗0.3+nota3∗0.4


*/

if(isset($_POST['media_simples'])){
    $nota1 = $_POST['num1'];
    $nota2 = $_POST['num2'];
    $nota3 = $_POST['num3']; 
    echo ($nota1+$nota2+$nota3)/3;
}

if(isset($_POST['media_ponderada'])){
    $nota1 = $_POST['num1'];
    $nota2 = $_POST['num2'];
    $nota3 = $_POST['num3']; 
    echo ($nota1 * 3 + $nota2 * 3 + $nota3 * 4
    )/10;
}


?>
