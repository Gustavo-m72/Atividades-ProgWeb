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
       nova situação: <input type = "number" name = "situ"> <br>
        <input type="submit" name="cadastrar1" value="Atualizar situação Aluno">
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
       
        $situ = $_POST['situ'];
        $sql = "UPDATE aluno SET situacao = '$situ' WHERE nome = '$nome'";
        if (mysqli_query($con, $sql)) {
        echo "Dados inseridos";
        } else {
        echo "Erro ao inserir dados: " . mysqli_error($con);
        }
    }
  
?>