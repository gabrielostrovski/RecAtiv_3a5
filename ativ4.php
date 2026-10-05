<?php
function gerarSenha($quantidade) {
    $maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $especiais = '!@#$%^&*()-_=+[]{}|;:,.<>?';
    
    $senha = $maiusculas[rand(0, strlen($maiusculas) - 1)] .
             $minusculas[rand(0, strlen($minusculas) - 1)] .
             $numeros[rand(0, strlen($numeros) - 1)] .
             $especiais[rand(0, strlen($especiais) - 1)];
             
    $todosCaracteres = $maiusculas . $minusculas . $numeros . $especiais;
    
    for ($i = 4; $i < $quantidade; $i++) {
        $senha .= $todosCaracteres[rand(0, strlen($todosCaracteres) - 1)];
    }
    
    return str_shuffle($senha);
}
?>