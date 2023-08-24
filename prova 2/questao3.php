<?php

//aluno: Gustavo Manfio Stefanello
/*3. (2.0) Com base na tabela Employees da base de dados Employees, apresente:
a) O total de funcionários do gênero masculino e feminino.
b) A média de funcionários do gênero masculino e feminino
*/

$con = mysqli_connect("localhost", "root", "", "employees");

$sqlm = "SELECT gender FROM employees WHERE gender = 'M'";
$sqlf = "SELECT gender FROM employees WHERE gender = 'F'";
$sqlfun = "SELECT gender FROM employees";

$resultm = mysqli_query($con,$sqlm);
$resultf = mysqli_query($con,$sqlf);
$resultfun = mysqli_query($con,$sqlfun);


$mas = mysqli_num_rows($resultm);

$fem = mysqli_num_rows($resultf);

$fun = mysqli_num_rows($resultfun);

$mediafem = ($fem / $fun);
$mediamas = ($mas / $fun);

echo "A)O numero de mulheres eh: " . $fem . " e o numero de homens eh: " . $mas . "<br>";

echo "B)A media de mulheres eh: " . $mediafem * 100 . " e a media de homens eh: " . $mediamas * 100 . "<br>";




?>