<?php
function inverterTexto($texto) {
    $tamanho = strlen($texto);
    echo "Quantidade de caracteres na string original: " . $tamanho . "\n";
    
    return strrev($texto);
}
?>