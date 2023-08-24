<?php
class Corrente extends Conta
{
    private $TaxaOpecao;
    private $TaxaManutencao;

    public function DebitarManutencao()
    {
        $this->saldo = $this->saldo * $this->TaxaManutencao;
    }

}
require_once("conta.php");


?>