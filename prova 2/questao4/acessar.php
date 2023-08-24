<?php

function validar_login($con, $user, $pass)
{
    $sql = "SELECT id, nome, user FROM user WHERE user = '$user' and pass = '$pass'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)==0) {
        
        echo "login incorreto";
        header("location: cadastro.php");
        
    }else {
        session_start();
        $_SESSION['user'] = $row['nome'] ;
        echo ("logado com sucesso") . "<br>";
        //header("location: index.php");
        echo "Seja bem vindo " . $_SESSION['user'];
    }
}

if (isset($_POST['logar'])) {
    $con = mysqli_connect("localhost", "root", "", "bd_user");

    $user = $_POST["usuario"];
    $pass = $_POST["senha"];
    
    validar_login($con,$user,$pass);
}


?>