<?php
include 'ativ15.php';

$testes = [
    "IMC" => round(calcularIMC(70, 1.75), 2),
    "E-mail Válido" => validarEmail("a@b.com") ? "Sim" : "Não",
    "Senha" => gerSenhaAleatoria(12),
    "Vogais" => contarVogais("PHP"),
    "Inverter" => inverterTexto("PHP"),
    "Idade" => calcularIdade(2000),
    "Moeda" => "R$ " . converterMoeda(100, 5.50),
    "Telefone" => formatarTelefone("11988887777"),
    "Saudação" => gerarSaudacao(14),
    "Senha Forte" => validarSenhaForte("123") ? "Sim" : "Não"
];

foreach ($testes as $func => $res) echo "$func: $res\n";
?>