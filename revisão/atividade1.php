<html>

<body>
<form action= "" method="post">
    <input type = "number" name="num"> <br>
        <input type = "submit" name = "enviar"> enviar
</button>
</form>
</body>
</html>



<?php
/*
Lista revisão
    
1. Faça um algoritmo que receba um número qualquer. Caso o número seja par
menor que 10, escreva ‘Número par menor que Dez’, caso o número digitado
seja ímpar menor que 10 escreva ‘Número Ímpar menor que Dez’, caso
contrário Escreva ‘Número fora do Intervalo’.

*/

if(isset($_POST['enviar'])){
$N1 = $_POST['num'];

if($N1 <= 10 && $N1 % 2 == 0){
    echo "número par 10";
}elseif ($N1 <= 10) {
    echo "número impar";
}elseif ($N1 > 10) echo "maior que 10";
}


?>
