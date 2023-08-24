
<html>
    <head>
      <title>Pagina de Login</title>
    </head>

    <body>
            <form  method="post">
            <table class="table">
                <tr>
                    <td>Usuario</td>
                    <td><input class="form-control" type="user" name="usuario" required></td>
                </tr>
                <tr>
                    <td>Novo Usuario</td>
                    <td><input class="form-control" type="user" name="novonome" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="atualizar" value='atualizar'></td>
                </tr>
                <tr>

                </tr>

            </table>
            </form>
    </body>
    </html>

<?php
//este arquivo faz a conexao com o banco de dados Usuarios que foi criado no Workbench
if(isset($_POST['atualizar'])){
    
  
  //funcao que conecta com o banco de dados
  $con= mysqli_connect('localhost','root', '','bd_user');
  //teste se a conexao nao acontecer (por algum erro, senha, usuario ou servidor)
  if(!$con){
    echo "Erro ao conectar no banco".mysqli_connect_errno();
  }else{
    //comando SQL que seleciona no banco de dados apenas o user e passaword que corresponderao usuario e senha que foram digitados pelo usuario
    $usuario= $_POST['usuario'];
    $usuario1= $_POST['novonome'];
    $query= "Select user from user where user='$usuario'";
    //funcao que realiza a consulta no banco de dados - recebe a conexao e a consulta
    $result_query= mysqli_query($con, $query);
    //a funcao acima retorna um recurso, sendo entao necessario usar uma funcao (fetch_assoc ou fetch_array) para pegar o valor retornado
    $result= mysqli_fetch_assoc($result_query);

   //teste se o resulta da consulta retornou valor
  if($result>0){
    $query = "UPDATE user SET user = '$usuario1' WHERE user = '$usuario'";
    if (mysqli_query($con, $query)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
  }
  }elseif($result==0){ //se o usuario e senha nao estivem no banco
    echo "usuario nao encontrado";
    }
  }
 mysqli_close($con);//fecha a conexao com o banco de dado
}