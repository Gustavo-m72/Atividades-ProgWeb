<?php
    include("conexao.php");
    include("cliente.php");

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        if (empty($email) && empty($senha)) {
            echo "dados vazios, digite novamente";
            header("index.php");
        }else {
            $cliente = new Cliente($email,$senha);
            $dados = $cliente->pesquisarlogin($con);
            if ($dados == 0) {
                echo "senha ou login incorreto";
                header("index.php");
            }elseif ($dados['adm'] > 0) {
                session_start();
                $_SESSION['adm'] = $dados['id'];
            
                echo "login concluido com sucesso seu id: " . $_SESSION['adm'];
            }else{
                session_start();
                $_SESSION['usuario'] = $dados['id'];
                
                echo "login concluido com sucesso seu id: " . $_SESSION['usuario'];
            }
        }
    }
?>