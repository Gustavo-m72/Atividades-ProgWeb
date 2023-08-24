<html>
<body>

    <form action="" method="post">
       nota 1: <input type = "number" name = "nota1"> <br>
        nota 2: <input type = "number" name = "nota2"> <br>
        <input type="submit" name="calcular" value="Calcular Media">
    </form>
    
    <form action="escola.php" method="post">
        <br><input type="submit" name="voltar" value="voltar">
    </form>
</body>
</html>

<?php
    include("professor.php");

    if (isset($_POST['calcular'])) {
        $nota1 = $_POST['nota1'];
        $nota2= $_POST['nota2'];
        $obj = new Professor();

        $obj->lancarmedia($nota1,$nota2);
    }
  