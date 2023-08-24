<?php

class Pessoa
{
    private $nome;
    private $email;
    private $telefone;
    private $idade;
    private $sexo;

    public function mostrar($nome)
    {
        echo "nome: " . $nome;
    }
}



?>