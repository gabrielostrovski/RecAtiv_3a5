<?php
function converterTemperatura($valor, $origem, $destino) {
    $origem = strtoupper($origem);
    $destino = strtoupper($destino);
    
    if ($origem === 'CELSIUS') { $celsius = $valor; }
    elseif ($origem === 'FAHRENHEIT') { $celsius = ($valor - 32) * 5 / 9; }
    elseif ($origem === 'KELVIN') { $celsius = $valor - 273.15; }
    else { return "Escala de origem inválida."; }
    
    if ($destino === 'CELSIUS') { return $celsius; }
    elseif ($destino === 'FAHRENHEIT') { return ($celsius * 9 / 5) + 32; }
    elseif ($destino === 'KELVIN') { return $celsius + 273.15; }
    else { return "Escala de destino inválida."; }
}
?>