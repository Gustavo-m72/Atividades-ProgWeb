<html>
    <head>
      <title>Index</title>
    </head>

    <body>
            <form  method="post">
            <table class="table">

                <tr>
                    <td><input type="submit" name="sair" value='Sair'></td>
                </tr>

            </table>
            </form>
    </body>
    </html>

    <?php

session_start();
if (isset($_SESSION['user'])) {
    
    echo "Seja bem vindo " . $_SESSION['user'];
}else {
    header("location: login.php");
}


?>