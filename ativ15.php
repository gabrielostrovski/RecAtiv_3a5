<?php
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function gerSenhaAleatoria($tamanho) {
    return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$"), 0, $tamanho);
}

function contarVogais($texto) {
    return preg_match_all('/[aeiouAEIOU]/', $texto);
}

function inverterTexto($texto) {
    return strrev($texto);
}

function calcularIdade($anoNascimento) {
    return date('Y') - $anoNascimento;
}

function converterMoeda($valorDolar, $taxaCambio) {
    return $valorDolar * $taxaCambio;
}

function formatarTelefone($numero) {
    return "(" . substr($numero, 0, 2) . ") " . substr($numero, 2, 5) . "-" . substr($numero, 7);
}

function gerarSaudacao($hora) {
    if ($hora >= 5 && $hora < 12) return "Bom dia";
    if ($hora >= 12 && $hora < 18) return "Boa tarde";
    return "Boa noite";
}

function validarSenhaForte($senha) {
    return strlen($senha) >= 8;
}
?>