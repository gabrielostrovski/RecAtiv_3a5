<?php
function analisarNumero($num) {
    $parImpar = ($num % 2 == 0) ? "Par" : "Ímpar";

    $primo = "Primo";
    if ($num <= 1) $primo = "Não é primo";
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) { $primo = "Não é primo"; break; }
    }

    $soma = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) $soma += $i;
    }
    $perfeito = ($soma == $num && $num > 0) ? "Perfeito" : "Não é perfeito";

    return ['par_impar' => $parImpar, 'primo' => $primo, 'perfeito' => $perfeito];
}
?>