<?php
$casos = intval(readline()); // Lê o número de casos

for ($i = 0; $i < $casos; $i++) {
    list($inicio, $fim) = explode(" ", readline()); // Lê o intervalo de números para cada caso
    
    // Imprime a sequência ascendente de números no intervalo
    for ($num = $inicio; $num <= $fim; $num++) {
        echo "$num";
    }
    
    // Imprime a sequência descendente de números no intervalo (invertidos)
    for ($num = $fim; $num >= $inicio; $num--) {
        echo strrev($num);
    }
    
    echo "\n"; // Imprime uma nova linha no final de cada caso
}
?>
