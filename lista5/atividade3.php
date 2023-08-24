<?php

/*
Use o banco de dados Employees para responder as perguntas abaixo:
a) Liste todos os nomes e sobrenomes dos funcionários.
b) Liste os salários acima de R$2,500.
c) Liste a data de contratação (Hire_Date) do funcionário Georgi Facello.
d) Insira um novo funcionário na tabela employees
*/


$con=mysqli_connect("localhost","root","","employees");

$sql = "SELECT first_name,last_name FROM employees ORDER BY first_name";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result)){

//printf("\n%s %s\n\n",$row["first_name"], $row["last_name"]);
}

$sql = "SELECT salary FROM salaries WHERE salary >= 2500 ORDER BY salary desc";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result)){

    //printf("\n%f \n\n",$row["salary"]);

}

$sql = "SELECT hire_date FROM employees where first_name = 'Georgi' and last_name = 'Facello'";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result)){

    //printf("\n%s", $row["hire_date"]);
    }

    $firt_name = "godofredo";
    $last_name = "aurelio";
    $gender = "M";
    $emp_no = "100000000";
    $birth_date = "1953-09-02";
    $hire_date = "1953-09-02";


    $sql = "INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) VALUES ('$emp_no', '$birth_date', '$firt_name', '$last_name', '$gender', '$hire_date' )";
    if (mysqli_query($con, $sql)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($con);
    }
?>