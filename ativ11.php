<?php
function formatarTexto($texto) {
    return [
        'maiusculo' => strtoupper($texto),
        'minusculo' => strtolower($texto),
        'primeiras_maiusculas' => ucwords($texto),
        'total_caracteres' => strlen($texto)
    ];
}
?>