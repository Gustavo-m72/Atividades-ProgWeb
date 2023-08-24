<?php


include("conecta.php");

$sql = "SELECT altura FROM aluno WHERE altura >= '1.80' ORDER BY altura desc";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result)){

    printf("\n%f \n\n",$row["altura"]);
}

$sql = "SELECT nome FROM aluno WHERE situacao >= '1' ORDER BY altura desc";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result)){

    printf("\n%s \n\n",$row["nome"]);
}

$sql = "SELECT altura FROM aluno WHERE altura >= '1.80' or altura <= '1.50' ORDER BY altura desc";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result)){

    printf("\n%f \n\n",$row["altura"]);
}

$sql = "SELECT nome, email, telefone, altura, situacao FROM aluno WHERE altura >= '1.70' and nome = 'joana' and situacao = '0'";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result)){

    printf("\n%f \n\n",$row["altura"]);
}

$sql = "SELECT nome FROM aluno";

$result = mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result)){

    echo "quantidade de alunos cadastrados " . sizeof($row); 
}

?>