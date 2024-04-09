<?php

function ordenarCodigos($codigos) {
    asort($codigos); // Ordena os códigos em ordem crescente
    return $codigos;
}

while ($numeroCodigos = intval(fgets(STDIN))) { // Enquanto houver entrada para processar
    $codigos = []; // Inicializa um array para armazenar os códigos
    
    // Lê os códigos e os armazena no array
    for ($i = 0; $i < $numeroCodigos; $i++) {
        $codigo = trim(fgets(STDIN)); // Lê um código
        $codigos[$codigo] = $codigo; // Armazena o código no array
    }

    // Chama a função para ordenar os códigos
    $codigosOrdenados = ordenarCodigos($codigos);

    // Imprime os códigos ordenados
    foreach ($codigosOrdenados as $codigo) {
        echo $codigo . "\n"; // Imprime o código
    }
}

?>
