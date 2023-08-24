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

    if (isset($_POST['consultar1'])) {
        $id = $_POST['id'];
        $sql = "SELECT cod_ferramenta, nome_ferramenta, marca_ferramenta FROM ferramenta where  cod_ferramenta = '$id'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_assoc($result)){
                echo "id " . $row["cod_ferramenta"] . "<br>";
                echo "nome " . $row["nome_ferramenta"] . "<br>";
                echo "marca " . $row["marca_ferramenta"] . "<br>";
            }
        }else {
            echo "nenhum valor foi encontrado";
        }   
    }

    if (isset($_POST['listar1'])) {
        $sql = "SELECT cod_ferramenta, nome_ferramenta, marca_ferramenta FROM ferramenta ORDER BY cod_ferramenta";

        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_assoc($result)){
                echo "id " . $row["cod_ferramenta"] . "<br>";
                echo "nome " . $row["nome_ferramenta"] . "<br>";
                echo "marca " . $row["marca_ferramenta"] . "<br>";
            }
        }else {
            echo "nenhum valor foi encontrado";
        }   
}

?>