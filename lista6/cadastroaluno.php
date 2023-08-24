<html>
<body>
    <?php
        session_start();
        include("conecta.php");
        if (isset($_SESSION['cadastro'])) {
            echo "";
        } else {
            header("Location: atividade6.php");
        }
    ?>

    <form action="" method="post">
       Nome: <input type = "text" name = "nome"> <br>
       E-mail: <input type = "text" name = "email"> <br>
       Telefone: <input type = "text" name = "telefone"> <br>
       Altura: <input type = "float" name = "altura"> <br>
       Situação: <input type = "number" name = "situ"> <br>
        <input type="submit" name="cadastrar1" value="Cadastrar Aluno">
    </form>
    
    <form action="atividade6.php" method="post">
        <br><input type="submit" name="voltar" value="voltar">
    </form>
</body>
</html>

<?php
    include("conecta.php");

    if (isset($_POST['cadastrar1'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $altura = $_POST['altura'];
        $situ = $_POST['situ'];
        $sql = "INSERT INTO aluno (nome,email ,telefone ,altura ,situacao) VALUES ('$nome', '$email', '$telefone','$altura','$situ' )";
        if (mysqli_query($con, $sql)) {
        echo "Dados inseridos";
        } else {
        echo "Erro ao inserir dados: " . mysqli_error($con);
        }
    }
  
?>