<html>
<body>
    <?php
        session_start();
        include("conecta.php");
        $_SESSION['cadastro'] = "cadastro";
    ?>

    <form action="cadastrar_ferramentas.php" method="post">
        <input type="submit" name="cadastrar" value="Cadastrar Ferramentas">
    </form>
    
    <form action="consultar_ferramentas.php" method="post">
        <input type="submit" name="consultar" value="Consultar Ferramentas">
    </form>
</body>
</html>
