<?php

    class Ferramenta
    {
        protected $nome_ferramenta;
        protected $marca_ferramenta;

        protected $con;

        function __construct($nome_ferramenta, $marca_ferramenta, $con){

            $this->nome_ferramenta = $nome_ferramenta;
            $this->marca_ferramenta = $marca_ferramenta;
            $this->con = $con;

        }

        function inclue(){
            
            $sql = "INSERT INTO ferramenta (nome_ferramenta, marca_ferramenta) VALUES ('$this->nome_ferramenta', '$this->marca_ferramenta' )";
            if (mysqli_query($this->con, $sql)) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Erro ao inserir dados: " . mysqli_error($this->con);
            }
        }
        
        function consulta($id){
            
            $sql = "SELECT cod_ferramenta, nome_ferramenta, marca_ferramenta FROM ferramenta where  cod_ferramenta = '$id'";
    
            $result = mysqli_query($this->con, $sql);
    
            if (mysqli_num_rows($result) > 0) {
                while($row=mysqli_fetch_assoc($result)){
                    echo "id " . $row["cod_ferramenta"] . "<br>";
                    echo "nome " . $row["nome_ferramenta"] . "<br>";
                    echo "marca " . $row["marca_ferramenta"] . "<br>";
                }
            }else {
                echo "nenhum valor foi encontrado";
            }   
        }

        function listar(){
            $sql = "SELECT cod_ferramenta, nome_ferramenta, marca_ferramenta FROM ferramenta ORDER BY cod_ferramenta";

            $result = mysqli_query($this->con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($row=mysqli_fetch_assoc($result)){
                    echo "id " . $row["cod_ferramenta"] . "<br>";
                    echo "nome " . $row["nome_ferramenta"] . "<br>";
                    echo "marca " . $row["marca_ferramenta"] . "<br>";
                }
            }else {
                echo "nenhum valor foi encontrado";
            }   
        }
    }



?>