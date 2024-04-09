<?php

$quantidadeCasos = intval(trim(fgets(STDIN)));

for ($indice = 0; $indice < $quantidadeCasos; $indice++) {
    $mensagem = trim(fgets(STDIN));
    $textoOculto = preg_replace('/[^a-z]/', '', $mensagem);
    $textoCorrigido = strrev($textoOculto);
    echo $textoCorrigido . "\n";
}

?>
