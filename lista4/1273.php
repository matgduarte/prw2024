<?php
$linhas = array_fill(0, 50, array_fill(0, 51, "")); // Inicializa um array multidimensional para armazenar as linhas
$N;
$n;
$maior;
$primeiraIteracao = 1; // Variável para verificar se é a primeira iteração

while (fscanf(STDIN, "%d\n", $N)) {
    if (!$N)  break; // Se N for zero, encerra o loop

    if ($primeiraIteracao)   $primeiraIteracao = 0; // Se for a primeira iteração, define a variável de controle como 0
    else echo "\n"; // Se não for a primeira iteração, imprime uma quebra de linha

    $maior = 0; // Inicializa a variável para armazenar o comprimento da maior linha
    for ($i = 0; $i < $N; ++$i) {
        fscanf(STDIN, "%s\n", $linhas[$i]); // Lê a linha e armazena no array
        $maior = $maior < strlen($linhas[$i]) ? strlen($linhas[$i]) : $maior; // Atualiza o comprimento da maior linha
    }

    for ($i = 0; $i < $N; ++$i) {
        $n = strlen($linhas[$i]); // Obtém o comprimento da linha atual
        for ($j = 0; $j < $maior - $n; ++$j)  echo " "; // Imprime espaços em branco para alinhar as linhas
        echo $linhas[$i] . "\n"; // Imprime a linha atual
    }
}

return 0;
?>
