<?php
    include("conexao.php");
    include("cliente.php");

    if (isset($_SESSION['cadastro'])) {
        echo "processando". "<br>";
    }else
        header("cadastro.php");

    if (isset($_POST['cadastrar'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if (empty($email) && empty($senha)) {
            echo "dados vazios, digite novamente";
            header("cadastro.php");
        }
    }


?>