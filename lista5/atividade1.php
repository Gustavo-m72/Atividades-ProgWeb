<html>
    <body>
        <form action= "" method="post">
            <input type = "text" name="nome"> <br>
            <input type = "password" name="senha"> <br>
                <input type = "submit" name = "enviar"> 
            </button>
        </form>
    </body>
</html>

<?php
    
    /*

1. Com a ajuda de Formulários, monte um sistema de Login de usuário, o qual
deve informar ao usuário se ele está ou não logado. Caso ele esteja não exiba
a tela de login, apenas uma mensagem de boas vindas. Crie um cookie para
que o status expire em 1 hora. 
    */
    
    if (isset($_POST['enviar'])) {
        $nome =  $_POST['nome'];
        $senha =  $_POST['senha'];
        setcookie('nome', $nome);
        setcookie('senha', $senha);
    }
   if (isset($_COOKIE['nome']) && isset($_COOKIE['senha'])) {
        echo "usuário logado";
   }else {
        echo "usuário nao logado";
   }


?>
