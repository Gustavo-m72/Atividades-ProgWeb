<?php

function cadastrar($con,$nome, $user, $pass)
{
    if (empty($nome)||empty($user)||empty($pass)) {
        echo "valores nulos, por favor digite valores validos";
        header("location: cadastro.php");
    }
    $sql = "SELECT * FROM user WHERE user = '$user'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)>0) {
        echo "usuario já cadastrado, tente user diferente" . "<br>";
        header("location: cadastro.php");
    }else {
        
        $sql = "INSERT INTO user (nome, user, pass) VALUES ('$nome', '$user', $pass)";
        mysqli_query($con, $sql);
        echo("cadastrado com sucesso");
        //validar_login($con, $user, $pass);
        header("location: login.php");
    }
}

if (isset($_POST['salvar'])) {
    $con = mysqli_connect("localhost", "root", "", "bd_user");

    $user = $_POST['usuario'];
    $nome = $_POST['nome'];
    $pass = $_POST['senha'];

cadastrar($con,$nome, $user,$pass);
}

?>