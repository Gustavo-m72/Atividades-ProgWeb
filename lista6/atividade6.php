<html>
<body>
    <?php
        session_start();
        include("conecta.php");
        $_SESSION['cadastro'] = "cadastro";
    ?>

    <form action="cadastroaluno.php" method="post">
        <input type="submit" name="cadastrar" value="Cadastrar Alunos">
    </form>
    
    <form action="alterarsitucao.php" method="post">
        <input type="submit" name="alterar" value="Alterar situação aluno">
    </form>
</body>
</html>