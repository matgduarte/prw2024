<?php
$quantidadeLinhas = intval(readline()); // Obtém a quantidade de linhas

// Array associativo que mapeia cada letra para o seu código correspondente
$codigos = [
    "a" => "2", "b" => "22", "c" => "222",
    "d" => "3", "e" => "33", "f" => "333",
    "g" => "4", "h" => "44", "i" => "444",
    "j" => "5", "k" => "55", "l" => "555",
    "m" => "6", "n" => "66", "o" => "666",
    "p" => "7", "q" => "77", "r" => "777",
    "s" => "7777", "t" => "8", "u" => "88",
    "v" => "888", "w" => "9", "x" => "99",
    "y" => "999", "z" => "9999", " " => "0"
];

for ($i = 0; $i < $quantidadeLinhas; $i++) {
    $resultado = ""; // Inicializa a string de resultado
    
    // Obtém a entrada e a divide em um array de caracteres
    $entrada = str_split(readline());
    
    for ($c = 0; $c < count($entrada); $c++) {
        // Verifica se não é o primeiro caractere da palavra e se a letra atual e a anterior possuem o mesmo código
        if ($c != 0 && substr($codigos[strtolower($entrada[$c])], 0, 1) == substr($codigos[strtolower($entrada[$c - 1])], 0, 1) && !ctype_upper($entrada[$c])) {
            $resultado .= "*"; // Adiciona um asterisco ao resultado
        }
        
        // Verifica se o caractere atual é maiúsculo
        if (ctype_upper($entrada[$c])) {
            $resultado .= "#" . $codigos[strtolower($entrada[$c])]; // Adiciona "#" seguido do código da letra ao resultado
        } else {
            $resultado .= $codigos[$entrada[$c]]; // Adiciona o código da letra ao resultado
        }
    }
    
    echo "$resultado\n"; // Imprime o resultado
}
?>
