<?php

$numero_palavras = 0; // Inicialização do número de palavras
$palavra = ""; // Inicialização da palavra

fscanf(STDIN, "%d", $numero_palavras); // Lê o número de palavras

while ($numero_palavras > 0) {
    fscanf(STDIN, "%s", $palavra); // Lê a palavra
    
    // Verifica o tamanho da palavra
    if (strlen($palavra) == 5) {
        echo "3\n"; // Se tiver 5 caracteres, imprime 3
    } 
    // Verifica se a palavra contém a sequência "one", "two" ou "three"
    else if (($palavra[0] == 'o' && $palavra[1] == 'n') || 
             ($palavra[0] == 'o' && $palavra[2] == 'e') || 
             ($palavra[1] == 'n' && $palavra[2] == 'e')) {
        echo "1\n"; // Se sim, imprime 1
    } 
    // Verifica se a palavra contém a sequência "two" ou "tw"
    else if (($palavra[0] == 't' && $palavra[1] == 'w') || 
             ($palavra[0] == 't' && $palavra[2] == 'o') || 
             ($palavra[1] == 'w' && $palavra[2] == 'o')) {
        echo "2\n"; // Se sim, imprime 2
    }
    
    $numero_palavras--; // Decrementa o número de palavras
}
?>
