<?php

class Conta
{
    private $cliente;
    protected $saldo;
    private $numero;
    private $dataabertura;


    public function creditar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    public function debitar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }
}



?>