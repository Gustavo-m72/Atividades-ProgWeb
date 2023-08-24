<html>
    <head>
      <title>Pagina de Cadastro</title>
    </head>

    <body>
            <form  method="post">
            <table class="table">
                <tr>
                    <td>Usuario</td>
                    <td><input class="form-control" type="user" name="usuario" required></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha" required></td>
                </tr>
                <tr>
                    <td>Nome do usuario</td>
                    <td><input class="form-control" type="name" name="nome" required></td>
                </tr><b></b>
                <tr>
                    <td><input type="submit" name="salvar" value='Salvar'></td>
                </tr>

            </table>
            </form>
    </body>
    </html>
    <?php
 //verifica se o usuario clicou no botao Logar para pegar a entrada do usuario
    if(isset($_POST['salvar'])){
        $usuario= $_POST['usuario']; //recebe entrada do usuario campo usuario
        $senha= $_POST['senha']; //recebe entrada do usuario campo senha
        $nome=$_POST['nome']; //recebe entrada do usuario campo nome do usuario
        if (!empty($nome) && !empty($usuario) && !empty($senha)) {
            echo "dados vazios, digite novamente";
        }else{
        //$query= "Select user from user where user='$usuario'";
        //funcao que realiza a consulta no banco de dados - recebe a conexao e a consulta
       // $result_query= mysqli_query($con, $query);
        //a funcao acima retorna um recurso, sendo entao necessario usar uma funcao (fetch_assoc ou fetch_array) para pegar o valor retornado
       // $result= mysqli_fetch_assoc($result_query);

        //funcao que conecta com o banco de dados
        $con= mysqli_connect('localhost','root', '','bd_user');
         //teste se a conexao nao acontecer (por algum erro, senha, usuario ou servidor)
        if(!$con){
           echo "Erro ao conectar no banco".mysqli_connect_errno();
        }else{
            $query= "Select user from user where user='$usuario'";
            //funcao que realiza a consulta no banco de dados - recebe a conexao e a consulta
            $result_query= mysqli_query($con, $query);
            //a funcao acima retorna um recurso, sendo entao necessario usar uma funcao (fetch_assoc ou fetch_array) para pegar o valor retornado
            $result= mysqli_fetch_assoc($result_query);
            if ($result == null) {
                $query1= "INSERT INTO user (nome, user, pass) VALUES ('$nome', '$usuario', '$senha')";
                if (mysqli_query($con, $query1)) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $query . "<br>" . mysqli_error($con);
              }
        
            }else {
                echo "usuario ja cadastrado";
            }
            //comando SQL que seleciona no banco de dados apenas o user e passaword que corresponderao usuario e senha que foram digitados pelo usuario
           
    //funcao que realiza a consulta no banco de dados - recebe a conexao e a consulta
    
 }

 mysqli_close($con);//fecha a conexao com o banco de dados
 }
    }


