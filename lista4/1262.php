<?php
while (true) {
    $string = readline(); // Lê uma linha de entrada
    if ($string === false) break; // Se a entrada for falsa, encerra o loop
    
    $n = intval(readline()); // Lê um número inteiro
    
    // Itera sobre os valores de $n até 1
    for ($i = $n; $i > 0; $i--) {
        // Substitui repetições de 'R' no valor de $string pelo caractere 'W' repetido $n vezes
        $string = str_replace(str_repeat('R', $i), 'W', $string);
    }
    
    echo strlen($string) . "\n"; // Imprime o comprimento da string resultante de $string
}
?>
