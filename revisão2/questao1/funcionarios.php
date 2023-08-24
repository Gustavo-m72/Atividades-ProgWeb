<?php

/*
Use o banco de dados Employees para responder as perguntas abaixo:
a) Liste todos os nomes e sobrenomes dos funcionários.
b) Liste os salários acima de R$2,500.
c) Liste a data de contratação (Hire_Date) do funcionário Georgi Facello.
d) Insira um novo funcionário na tabela employees
*/
class Funcionario
{
   protected $first_name;
   protected $last_name ;
   protected $gender;
   protected $emp_no;
   protected $birth_date;
   protected $hire_date;

function ConsultarNomeSobrenome(){
    include("conecta.php");
    $sql = "SELECT first_name,last_name FROM employees ORDER BY first_name";

    $result = mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($result)){
        printf("\n%s %s\n\n",$row["first_name"], $row["last_name"]);
    }
}


function ConsultarSalario($salario){
    include("conecta.php");
    $sql = "SELECT salary FROM salaries WHERE salary >= '$salario' ORDER BY salary desc";

    $result = mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($result)){

    printf("\n%f \n\n",$row["salary"]);

    }
}

function ConsultarData($primeiro_nome, $sobrenome){
    include("conecta.php");
    $sql = "SELECT hire_date FROM employees where first_name = '$primeiro_nome' and last_name = '$sobrenome'";

    $result = mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($result)){

    printf("\n%s", $row["hire_date"]);
    }
}

   /* $first_name = "godofredo";
    $last_name = "aurelio";
    $gender = "M";
    $emp_no = "100000000";
    $birth_date = "1953-09-02";
    $hire_date = "1953-09-02";
    */
function Inserir($emp_no, $birth_date, $first_name, $last_name, $gender, $hire_date){
    include("conecta.php");
    $sql = "INSERT INTO employees (emp_no, birth_date, first_name, last_name, gender, hire_date) VALUES ('$emp_no', '$birth_date', '$first_name', '$last_name', '$gender', '$hire_date' )";
    if (mysqli_query($con, $sql)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($con);
    }
}
}

$obj = new Funcionario();
    $first_name = "godofredo";
    $last_name = "aurelio";
    $gender = "M";
    $emp_no = "1000000001";
    $birth_date = "1953-09-02";
    $hire_date = "1953-09-02";
    
$obj->Inserir($emp_no, $birth_date, $first_name, $last_name, $gender, $hire_date);
$obj->ConsultarSalario(2500);
$obj->ConsultarNomeSobrenome();
$obj->ConsultarData("Georgi"," Facello");

?>