<?php
function analisarProdutos($produtos) {
    asort($produtos); 
    
    $nomes = array_keys($produtos);
    $precos = array_values($produtos);
    
    return [
        'mais_barato' => $nomes[0],
        'mais_caro' => end($nomes),
        'media_precos' => array_sum($precos) / count($precos)
    ];
}
?>