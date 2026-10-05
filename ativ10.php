<?php
function calcularMedia($notas) {
    if (empty($notas)) return "Nenhuma nota informada.";
    
    $maior = max($notas);
    $menor = min($notas);
    $media = array_sum($notas) / count($notas);
    
    if ($media >= 7) { $situacao = "Aprovado"; }
    elseif ($media >= 5) { $situacao = "Recuperação"; }
    else { $situacao = "Reprovado"; }
    
    return [
        'Maior nota' => $maior,
        'Menor nota' => $menor,
        'Média' => $media,
        'Situação final' => $situacao
    ];
}
?>