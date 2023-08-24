<html>

<body>
<form action= "" method="post">
<?php
    echo "cor dos olhos (A - azul, P - Preto, V -Verde e C - Castanho)" . "<br>";
    echo "cor dos cabelos (P - Preto, C - Castanho, L - Louro e R - Ruivo)" . "<br>";
    for ($i=0; $i < 10; $i++) { 
        echo "idade: " .  $i . "<input type = 'num' name='idade$i'/><br>";
        echo "peso: " .  $i . "<input type = 'text' name='peso$i'/><br>";
        echo "altura: " .  $i . "<input type = 'text' name='altura$i'/><br>";
        echo "Cor do olho: " .  $i . "<input type = 'text' name='olho$i'/><br>";
        echo "Cor do cabelo: " .  $i . "<input type = 'text' name='cabelo$i'/><br>";
        echo "<br>";      
    }
        ?>
        <button type = "submit" name = "botao"> enviar
        </button>
    
</form>
</body>
</html>

<?php
/*
Lista revisão
    
4. Faça um programa que receba um array com a idade, o peso, a altura, a cor
dos olhos (A - azul, P - Preto, V -Verde e C - Castanho) e a cor dos cabelos
(P - Preto, C - Castanho, L - Louro e R - Ruivo) de 10 pessoas, e calcule e
mostre:
a. a quantidade de pessoas com idade superior a 50 anos e peso inferior
a 60 quilos;
b. a média das idades das pessoas com altura inferior a 1,50;
c. a percentagem de pessoas com olhos azuis entre todas as pessoas
analisadas;
d. a quantidade de pessoas ruivas e que não possuem olhos azuis

*/

$pessoas = 0;
$altura = 0;
$idade = 0;
$azul = 0;
$ruiva = 0;

if (isset($_POST['botao'])) {
    
    for ($i=0; $i < 10; $i++) { 
        if ($_POST['idade' . $i] >= "50" && $_POST['peso' . $i] <= "60") {
            $pessoas++;
        }
    }

    echo "pessoas com idade superior a 50 e peso ingerior a 60kg " . $pessoas . "<br>";

    for ($i=0; $i < 10; $i++) { 
        if ($_POST['altura' . $i] >= "1.5") {
            $idade+=$_POST['altura' . $i];
            $altura++;
        }
    }

    echo "b " . $idade/$altura . "<br>";

    for ($i=0; $i < 10; $i++) { 
        if ($_POST['olho' . $i] >= "A") {
            $azul++;
        }
    }



    echo "c " . ($azul * 100)/10 . "<br>";

    for ($i=0; $i < 10; $i++) { 
        if ($_POST['olho' . $i] != "A" && $_POST['cabelo' . $i] == 'R') {
            $ruiva++;
        }
    }

    echo "d " . $ruiva . "<br>";
}
?>