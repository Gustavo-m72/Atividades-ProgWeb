


<?php

//aluno: Gustavo Manfio Stefanello
//1. (1.5) Criar uma classe Lâmpada que pode ser ligada e desligada. Também deve ser
//possível observar o estado da lâmpada. O programa principal deve instanciar os objetos
//da classe Lâmpada e utilizar seus métodos.

class Lampada{

    public $estado;


    function ligar(){

        $this->estado = "ligado";

    }

    function desligar(){

        $this->estado = "desligado";

    }


    function mostrarEstado(){

        echo "o estado da lampada é: " . $this->estado . "<br>"; 

    }

}


$obj_lampada = new Lampada();

$obj_lampada->ligar();
$obj_lampada->mostrarEstado();

$obj_lampada->desligar();
$obj_lampada->mostrarEstado();




?>