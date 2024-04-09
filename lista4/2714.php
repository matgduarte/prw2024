<?php
$quantidadeSenhas = intval(readline()); // Lê a quantidade de senhas

$tamanho = 0; // Variável para armazenar o tamanho da primeira senha

for ($indice = 0; $indice < $quantidadeSenhas; $indice++) {
    $senha = readline(); // Lê a senha

    $senhaArray = str_split($senha); // Converte a senha para um array de caracteres

    // Se for a primeira senha, armazena o tamanho dela
    if ($indice == 0) {
        $tamanho = count($senhaArray);
    }

    // Verifica se a senha começa com "RA" e tem o mesmo tamanho da primeira senha
    if ($senhaArray[0] == 'R' && $senhaArray[1] == 'A' && count($senhaArray) == $tamanho) {
        unset($senhaArray[0]); // Remove o primeiro caractere ('R')
        unset($senhaArray[1]); // Remove o segundo caractere ('A')

        // Converte o array de caracteres de volta para uma string e a imprime como um número
        echo intval(implode("", $senhaArray)) . "\n";
    } else {
        echo 'INVALID DATA' . "\n"; // Se a senha não seguir os critérios, imprime "INVALID DATA"
    }
}
?>
