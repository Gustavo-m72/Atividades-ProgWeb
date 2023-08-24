
<form action = "" method="post">
    <div>
        <label name = "email">E-mail: </label>
        <input type = "e-mail" name = "email" id = "email" required/>
    </div>
    <div>
        <label name = "senha">Senha: </label>
        <input type = "password" name = "senha" id = "senha" required/>
    </div>
    <div>
        <input type="submit" name = "cadastrar_novo" id = "cadastrar_novo">
    </div>
</form>

<?php
include("conexao.php");
include("cliente.php");

if (isset($_POST['cadastrar_novo'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if (empty($email) && empty($senha)) {
        echo "dados vazios, digite novamente";
    }else {
        $user = new Cliente($email, $senha);
        
        if ($user->pesquisar($con, $email) == 0) {
            //echo "ok";
            $user->inserir($con);
        }else {
            echo "e-mail já utilizado";
        }
    }


}
?>