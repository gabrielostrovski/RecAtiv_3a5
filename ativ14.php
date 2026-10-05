<?php
function estatisticasNumericas($numeros) {
    sort($numeros);
    $qtd = count($numeros);
    $meio = floor($qtd / 2);
    $mediana = ($qtd % 2 != 0) ? $numeros[$meio] : ($numeros[$meio - 1] + $numeros[$meio]) / 2;

    return [
        'soma' => array_sum($numeros),
        'media' => array_sum($numeros) / $qtd,
        'maior' => max($numeros),
        'menor' => min($numeros),
        'mediana' => $mediana
    ];
}
?>