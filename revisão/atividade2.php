<html>

<body>
<form action= "" method="post">
<?php
    for ($i=0; $i < 10; $i++) { 
        echo "<input type = 'number' name='num$i'/><br>";    
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
    
2. Elabore um programa que receba um array com a idade de 15 nadadores e
classifique-os em uma das seguintes categorias:
a. Infantil : 5 a 10 anos;
b. Juvenil : 11 a 17 anos;
c. Sênior: 18 anos ou mais.
menor que Dez’, caso
contrário Escreva ‘Número fora do Intervalo’.

*/

if (isset($_POST['botao'])) {


//$arr = _$POST['num'];

$infantil = array();

$juvenil = array();

$senior = array();

for ($i=0; $i < 10; $i++) { 
    if ($_POST["num".$i]>=5 && $_POST["num".$i] <=10) {
        array_push($infantil, $_POST["num".$i]);
    } 
    elseif ($_POST["num".$i]>=11 && $_POST["num".$i] <=17) {
        array_push($juvenil, $_POST["num".$i]);
    }
    elseif ($_POST["num".$i]>=18) {
        array_push($senior, $_POST["num".$i]);
    }
}
sort($infantil);
sort($juvenil);
sort($senior);

print_r($infantil);
echo "<br>";
print_r($juvenil);
echo "<br>";
print_r($senior);
}
?>
