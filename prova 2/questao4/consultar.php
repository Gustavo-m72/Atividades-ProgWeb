<html>
    <head>
      <title>Pagina de Login</title>
    </head>

    <body>
            <form  method="post">
            <table class="table">
               <tr>
                    <td>Consultar usuarios</td>
                    <td><input class="form-control" type="usuario" name="usuario"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="consultar" value='Consultar'></td>
                </tr>

            </table>
            </form>
    </body>
    </html>

    <?php

function consultar($con, $user)
{
    $sql = "SELECT id, nome, user FROM user WHERE user = '$user'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)==0) {
        echo "usuario não cadastrado";
    }else {
        
        echo "id: " . $row['id'] . "<br>";
        echo "user: " . $row['user'] . "<br>";
        echo "nome: " . $row['nome'] . "<br>";
       // echo ("logado com sucesso");
        //header("location: index.php");
    }
}

if (isset($_POST['consultar'])) {
    $con = mysqli_connect("localhost", "root", "", "bd_user");

    $user = $_POST['usuario'];
 
    
    consultar($con,$user);
}


?>