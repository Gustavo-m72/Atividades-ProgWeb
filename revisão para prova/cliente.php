<?php

    class Cliente
    {
        public $nome;
        public $senha;

        function __construct($nome, $senha){
            $this->nome = $nome;
            $this->senha = $senha;
        }
        
        function inserir($con){
            $sql = "INSERT INTO usuario (email,senha,adm) VALUES ('$this->nome','$this->senha',0)";
            if (mysqli_query($con, $sql)) {
                echo "dados inseridos com sucesso" . "<br>";
            }
        }
        
        function editar($con, $email_antigo){
            $sql = "UPDATE usuario set email = '$this->nome', senha = '$this->senha' where email = '$email_antigo'";
            if (mysqli_query($con, $sql)) {
                echo "dados inseridos com sucesso" . "<br>";
            }
        }
    
        function delete($con, $email){
            $sql = "DELETE FROM usuario where email = '$email'";
            if (mysqli_query($con, $sql)) {
                echo "dados inseridos com sucesso" . "<br>";
            }
        }
        
        function listar($con){
            $sql = "SELECT * FROM usuario";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "id " . $row["id"] . "<br>";
                    echo "email " . $row["email"] . "<br>";
                }
            }else {
                echo "nenhum valor encontrado";
            }
        }

        function pesquisar($con,$email){
            $sql = "SELECT * FROM usuario where email = '$email'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return $id = $row["id"];
            } else {
                return 0;
            }
        }
        
        function pesquisarlogin($con){
            $sql = "SELECT * FROM usuario where email = '$this->nome' and senha = '$this->senha'";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return $row;
            } else {
                return 0;
            }
        }
    }
    

?>



