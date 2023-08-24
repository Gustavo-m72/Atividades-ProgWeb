<html>
    <body>
        <form action= "" method="post">
            <input type = "text" name="nome"> <br>
            <input type = "text" name="senha"> <br>
                <input type = "submit" name = "enviar"> 
        </form>
    </body>
</html>

<?php
    
    /*
    2. Com o mesmo formulário anterior, use sessions para verificar se o usuário já
realizou o login. Além do status, confira também o usuário. Para validar o
usuário e senha, use os arrays a seguir
    
*/
    if (isset($_POST['enviar'])) {
        $login = array("user01", "user02", "user03", "user04", "user05");
        $senhas = array("senha01", "senha02", "senha03", "senha04", "senha05");
    
        session_start();
        //$_SESSION['usuario'] = $login[0];
        $nome =  $_POST['nome'];
        $senha =  $_POST['senha'];
        setcookie("nome", $nome);
        setcookie("senha", $senha);
        echo 1;
        if (isset($_COOKIE["nome"]) && isset($_COOKIE["senha"])) { 
            echo 2;
            for ($i=0; $i < 5; $i++) { 
                if ($_COOKIE['nome'] == $login[$i] && $_COOKIE['senha'] == $senhas[$i]) {
                    $_SESSION['usuario'] = $login[$i];
                    echo 3;
                }else {
                    echo $i . "<br>";
                }
            }
        }
        if (isset($_SESSION['usuario'])) {
            echo "senha correta" . "<br>";
        }else {
            echo "senha incorreta" . "<br>";
            setcookie('nome');
            setcookie('senha');
        }
    }
   
    if (isset($_SESSION['usuario'])) {
        echo "usuário logado";
            setcookie('nome');
            setcookie('senha');
            session_destroy();
   }else {
        echo "usuário nao logado";
   }


?>
