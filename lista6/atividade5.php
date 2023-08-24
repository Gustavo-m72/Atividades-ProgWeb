<html>
    <head>
      <title></title>
    </head>

    <body>
            <form  method="post">
            <table class="table">
                <tr>
                    <td>Entre com um valor inteiro</td>
                    <td><input class="form-control" type="valor" name="valor"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="inserir" value='Inserir'></td>
                </tr>
            </table>
            </form>
    </body>
    </html>

<?php
if (isset($_POST['inserir'])) {                      
    if($_POST["valor"]<=10 &&$_POST["valor"]>=0){
        $i = $_POST["valor"];
        if (isset($_COOKIE["val[$i]"])) {
            $_COOKIE["val[$i]"] = $_POST["valor"];
        }else {
            setcookie("val[$i]",$_POST["valor"]);
        }
    }else {
        echo "valor invalido";
    }

    $somaimpar = 0;
    $somapar = 0;

    foreach($_COOKIE['val'] as $valor){

        if ($valor > 10 && $valor <= 0){
        echo "fora do intervalo: $valor" . "<br>";
        }

        if ($valor % 2 == 0) {
            $somapar += $valor;
        }else {
            $somaimpar += $valor;
        }

    }
    echo "soma par:" . $somapar . "<br>";
    echo "soma impar:" . $somaimpar . "<br>";
    print_r($_COOKIE['val']);
}
?>