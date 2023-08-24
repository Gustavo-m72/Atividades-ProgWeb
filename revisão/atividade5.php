<html>

<body>
<form action= "" method="post">
    <input type = "number" name="num1"> cod 1 <br>
        <button type = "submit" name = "enviar">  enviar
        </button>
    
</form>
</body>
</html>



<?php
/*
Lista revisão
    
5. Faça uma função que receba o código de um determinado produto e retorne a
sua classificação, conforme tabela abaixo.

*/
function verificaproduto($cod){

    if ($cod == 1) {
        echo "Alimento não pericível";
    }
    elseif ($cod == 2 || $cod == 3 || $cod == 4 ) {
        echo "Alimento perecivel";
    }
    elseif ($cod == 5 || $cod == 6) {
        echo "vestuario";
    }
    elseif ($cod == 7) {
        echo "higiene pessoal";
    }
    elseif ($cod == 8 || $cod == 9 || $cod == 10) {
        echo "utensilios domesticos";
    }else echo "invalido";
}

if(isset($_POST['enviar'])){
    $num1 = $_POST['num1'];
    verificaproduto($num1);

}




?>