<?php
class Popuanca extends Conta
{
    private $TaxaRendimento;

    public function CreditarRendimento()
    {
        $this->saldo = $this->saldo * $this->TaxaRendimento;
    }

}
require_once("conta.php");


?>