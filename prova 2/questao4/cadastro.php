<html>
    <head>
      <title>Pagina de Cadastro</title>
    </head>

    <body>
            <form action = "cadastrar.php"  method="post">
            <table class="table">
                <tr>
                    <td>Usuario</td>
                    <td><input class="form-control" type="user" name="usuario" require></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha" require></td>
                </tr>
                <tr>
                    <td>Nome do usuario</td>
                    <td><input class="form-control" type="name" name="nome" require></td>
                </tr><b></b>
                <tr>
                    <td><input type="submit" name="salvar" value='Salvar'></td>
                </tr>

            </table>
            </form>
    </body>
    </html>

