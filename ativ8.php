<?php
function ordenarNomes($stringNomes) {
    $vetor = explode(',', $stringNomes);
    
    $vetorLimpo = array_map('trim', $vetor);
    
    sort($vetorLimpo);
    
    return $vetorLimpo;
}
?>