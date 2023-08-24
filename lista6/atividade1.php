<html>
    <body>
        <form action= "" method="post">
            <input type = "number" name="mes"> <br>
                <input type = "submit" name = "enviar"> 
            </button>
        </form>
    </body>
</html>
<?php

/*
1. Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.
*/


    if(isset($_POST['enviar'])){
$op= $_POST['mes'];


switch ($op) {
    case '1':
        echo "janeiro". "<br>";
        break;
    
    case '2':
        echo "fevereiro" . "<br>";
        break;    
    
    case '3':
        echo "março" . "<br>";
        break;

    case '4':
        echo "abril" . "<br>";
        break;

    case '5':
        echo "maio" . "<br>";
        break;
    
    case '6':
        echo "junho" . "<br>";
        break;    
    
    case '7':
        echo "julho" . "<br>";
        break;

    case '8':
        echo "agosto" . "<br>";
        break;

    case '9':
        echo "setembro" . "<br>";
        break;
    
    case '10':
        echo "outubro" . "<br>";
        break;    
    
    case '11':
        echo "novembro" . "<br>";
        break;

    case '12':
        echo "dezembro" . "<br>";
        break;
    
        default:
        echo "vai só de 1 até 12, não tem $op" . "<br>";
        break;
}
    }
?>