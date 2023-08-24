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
        ID: <input type = "number" name = "id"> <br>
        <input type="submit" name="consultar1" value="Consultar Ferramenta">
        <input type="submit" name="listar1" value="Listar Ferramentas">
    </form>
    
    <form action="index.php" method="post">
        <br><input type="submit" name="voltar" value="voltar">
    </form>
</body>
</html>

<?php
    include("conecta.php");
    include("ferramenta.php");
    if (isset($_POST['consultar1'])) {
        $id = $_POST['id'];

        
        $obj = new Ferramenta("", "", $con);
        $obj->consulta($id); 
    }

    if (isset($_POST['listar1'])) {
        $obj = new Ferramenta("", "", $con);
        $obj->listar();
}

?>