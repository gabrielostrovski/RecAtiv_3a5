<?php
function calcularDesconto($valorCompra) {
    $porcentagem = 0;
    
    if ($valorCompra > 1000) { $porcentagem = 0.30; }
    elseif ($valorCompra > 500) { $porcentagem = 0.20; }
    elseif ($valorCompra > 100) { $porcentagem = 0.10; }
    
    $desconto = $valorCompra * $porcentagem;
    $valorFinal = $valorCompra - $desconto;
    
    return [
        'Valor Original' => $valorCompra,
        'Desconto Aplicado' => $desconto,
        'Valor Final' => $valorFinal
    ];
}
?>