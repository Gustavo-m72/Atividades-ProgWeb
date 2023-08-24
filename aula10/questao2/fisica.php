<?php

class Fisica extends Pessoa
{
    private $cpf;

    public function validarCPF()
    {
            // Remover caracteres especiais do CPF
    $cpf = preg_replace('/[^0-9]/', '', $this->cpf);
    
    // Verificar se o CPF possui 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }
    
    // Verificar se todos os dígitos são iguais
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    
    // Calcular o primeiro dígito verificador
    $soma = 0;
    for ($i = 0; $i < 9; $i++) {
        $soma += intval($cpf[$i]) * (10 - $i);
    }
    $resto = $soma % 11;
    $digito1 = ($resto < 2) ? 0 : 11 - $resto;
    
    // Verificar o primeiro dígito verificador
    if (intval($cpf[9]) !== $digito1) {
        return false;
    }
    
    // Calcular o segundo dígito verificador
    $soma = 0;
    for ($i = 0; $i < 10; $i++) {
        $soma += intval($cpf[$i]) * (11 - $i);
    }
    $resto = $soma % 11;
    $digito2 = ($resto < 2) ? 0 : 11 - $resto;
    
    // Verificar o segundo dígito verificador
    if (intval($cpf[10]) !== $digito2) {
        return false;
    }
    
    // CPF válido
    return true;
    }
}



?>