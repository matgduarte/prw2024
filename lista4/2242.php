<?php
$entrada = readline(); // Lê a entrada

// Verifica se a entrada contém apenas letras minúsculas
if (preg_match('/^[a-z]+$/', $entrada)) {
    // Remove as consoantes da entrada
    $novaString = preg_replace("/[bcdfghjklmnpqrstvwxyz]/", "", $entrada);
    
    // Inverte a nova string
    $invertida = strrev($novaString);
    
    // Verifica se a nova string é um palíndromo
    if ($novaString == $invertida) {
        echo 'S' . PHP_EOL; // Se for um palíndromo, imprime "S"
    } else {
        echo 'N' . PHP_EOL; // Se não for um palíndromo, imprime "N"
    }
}
?>
