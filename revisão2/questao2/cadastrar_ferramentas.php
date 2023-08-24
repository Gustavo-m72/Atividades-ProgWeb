<html>
<body>
    <?php
        session_start();
        include("conecta.php");
        if (isset($_SESSION['cadastro'])) {
            echo "";
        } else {
            header("Location: index.php");
        }
    ?>

    <form action="" method="post">
       Nome: <input type = "text" name = "nome"> <br>
        Marca: <input type = "text" name = "marca"> <br>
        <input type="submit" name="cadastrar1" value="Cadastrar Ferramentas">
    </form>
    
    <form action="index.php" method="post">
        <br><input type="submit" name="voltar" value="voltar">
    </form>
</body>
</html>

<?php
    include("conecta.php");
    include("ferramenta.php");

    if (isset($_POST["cadastrar1"])) {
        $nome_ferramenta = $_POST["nome"];
        $marca_ferramenta = $_POST["marca"];
        
        $obj = new Ferramenta($nome_ferramenta, $marca_ferramenta, $con);
        $obj->inclue();
    }
  
?>