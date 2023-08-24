<html>
<body>

    <form action="" method="post">
       nome: <input type = "text" name = "nome"> <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    
    <form action="escola.php" method="post">
        <br><input type="submit" name="voltar" value="voltar">
    </form>
</body>
</html>

<?php
    include("aluno.php");

    if (isset($_POST['calcular'])) {
        $nome = $_POST['nome'];
       
        $obj = new Aluno();
        
        $obj->mostrar($nome);
    }