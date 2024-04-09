<?php
$numeroCasos = intval(fgets(STDIN)); // Número de casos

for ($i = 0; $i < $numeroCasos; $i++) {
    $numeroPessoas = intval(fgets(STDIN)); // Número de pessoas no caso atual
    $idiomas = array(); // Array para armazenar os idiomas e suas frequências

    // Loop para ler os idiomas de cada pessoa
    for ($j = 0; $j < $numeroPessoas; $j++) {
        $idioma = trim(fgets(STDIN)); // Lê o idioma da pessoa

        // Verifica se o idioma já está no array de idiomas
        if (array_key_exists($idioma, $idiomas)) {
            $idiomas[$idioma]++; // Incrementa a contagem do idioma
        } else {
            $idiomas[$idioma] = 1; // Adiciona o idioma ao array com contagem 1
        }
    }

    // Verifica se há mais de um idioma falado
    if (count($idiomas) >= 2) {
        echo "ingles\n"; // Se sim, imprime "ingles"
    } else {
        arsort($idiomas); // Ordena os idiomas pelo número de falantes (do maior para o menor)
        echo key($idiomas) . "\n"; // Imprime o idioma com mais falantes
    }
}
?>
