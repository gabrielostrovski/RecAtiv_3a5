<?php
function mascararCpf($cpf) {
    $apenasNumeros = preg_replace('/\D/', '', $cpf);
    $tamanho = strlen($apenasNumeros);
    
    if ($tamanho < 4) {
        return "CPF inválido";
    }
    
    $ultimosQuatro = substr($apenasNumeros, -4);
    $mascara = str_repeat('*', $tamanho - 4);
    
    return $mascara . $ultimosQuatro;
}
?>