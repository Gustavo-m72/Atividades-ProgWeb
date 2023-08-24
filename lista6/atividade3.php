<html>
    <body>
        <form action= "verificar.php" method="post">
            <input type = "number" name="mes"> <br>
                <input type = "submit" name = "enviar"> 
            </button>
        </form>
    </body>
</html>
<?php

/*

3. Faça uma página HTML na qual o usuário deve um valor no intervalo de 5 a 50. Chame um programa PHP que verifique se o valor está no intervalo. Caso não esteja, retorne à página de origem para redigitação. Se estiver correto, chame uma função para que calcule e apresente a tabuada do número no formato apresentado no exemplo:
Tabuada do número: 7 
7 * 0 = 0
7 * 1 = 7
 ..... 
7 * 10 = 70


*/


    if(isset($_POST['enviar'])){
        $op= $_POST['mes'];
    }


?>