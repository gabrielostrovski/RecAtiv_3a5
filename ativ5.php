<?php
function analisarTexto($texto) {
    $palavras = str_word_count($texto);
    $caracteres = strlen($texto);
    
    preg_match_all('/[aeiouAEIOU]/', $texto, $vogaisEncontradas);
    preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $texto, $consoantesEncontradas);
    
    return [
        'Quantidade de palavras' => $palavras,
        'Quantidade de caracteres' => $caracteres,
        'Quantidade de vogais' => count($vogaisEncontradas[0]),
        'Quantidade de consoantes' => count($consoantesEncontradas[0])
    ];
}
?>