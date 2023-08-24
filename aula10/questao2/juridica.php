<?php

class Juridica extends Pessoa
{
    private $cnpj;
    public function Validar_CNPJ()
    {
        $cnpj = preg_replace('/[^0-9]/', '', $this->cnpj);
    
        // Verificar se o CNPJ possui 14 dígitos
        if (strlen($cnpj) != 14) {
            return false;
        }
        
        // Verificar se todos os dígitos são iguais
        if (preg_match('/(\d)\1{13}/', $cnpj)) {
            return false;
        }
        
        // Calcular o primeiro dígito verificador
        $soma = 0;
        $peso = 5;
        for ($i = 0; $i < 12; $i++) {
            $soma += intval($cnpj[$i]) * $peso;
            $peso = ($peso == 2) ? 9 : $peso - 1;
        }
        $resto = $soma % 11;
        $digito1 = ($resto < 2) ? 0 : 11 - $resto;
        
        // Verificar o primeiro dígito verificador
        if (intval($cnpj[12]) !== $digito1) {
            return false;
        }
        
        // Calcular o segundo dígito verificador
        $soma = 0;
        $peso = 6;
        for ($i = 0; $i < 13; $i++) {
            $soma += intval($cnpj[$i]) * $peso;
            $peso = ($peso == 2) ? 9 : $peso - 1;
        }
        $resto = $soma % 11;
        $digito2 = ($resto < 2) ? 0 : 11 - $resto;
        
        // Verificar o segundo dígito verificador
        if (intval($cnpj[13]) !== $digito2) {
            return false;
        }
        
        // CNPJ válido
        return true;
    }
}



?>