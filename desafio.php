<?php
function processarPedido($produtos) {
    $subtotais = [];
    $totalItens = 0;
    $totalBase = 0;
    $maisCaroNome = "";
    $maisCaroValor = 0;

    foreach ($produtos as $p) {
        $sub = $p['quantidade'] * $p['valor_unitario'];
        $subtotais[$p['nome']] = $sub;
        $totalItens += $p['quantidade'];
        $totalBase += $sub;

        if ($p['valor_unitario'] > $maisCaroValor) {
            $maisCaroValor = $p['valor_unitario'];
            $maisCaroNome = $p['nome'];
        }
    }

    arsort($subtotais);
    
    $desconto = ($totalBase > 1000) ? 0.15 : (($totalBase > 500) ? 0.10 : 0);
    $valorDesconto = $totalBase * $desconto;
    
    $frete = ($totalBase > 800) ? 0 : (($totalBase > 300) ? 20 : 35);

    return [
        'qtd_produtos_diferentes' => count($produtos),
        'total_itens' => $totalItens,
        'produto_mais_caro' => $maisCaroNome,
        'maior_subtotal' => array_key_first($subtotais),
        'subtotais' => $subtotais,
        'desconto_aplicado' => $valorDesconto,
        'frete' => $frete,
        'valor_final' => ($totalBase - $valorDesconto) + $frete
    ];
}
?>