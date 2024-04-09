<?php

$quantidade_linhas = intval(fgets(STDIN));

for ($indice = 0; $indice < $quantidade_linhas; $indice++) {
    $linha = trim(fgets(STDIN));
    $total = 0;
    $numero1 = intval(substr($linha, 2, 2)); 
    $numero2 = intval(substr($linha, 5, 3));  
    $numero3 = intval(substr($linha, 11, 2));  
    $total = $numero1 + $numero2 + $numero3;
    echo $total . "\n";
}
?>
