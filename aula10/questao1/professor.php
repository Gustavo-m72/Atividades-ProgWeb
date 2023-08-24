<?php
include("pessoa.php");
class Professor extends Pessoa
{
    private $salario;
    private $disciplina;

    public function lancarmedia($nota1, $nota2)
    {
        $media = $nota1 + $nota2;
        echo "<br>Media Final: " . $media;
    }

}



?>