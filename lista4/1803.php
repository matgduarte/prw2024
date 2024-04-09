<?php
$matriz = [];
for ($i = 0; $i < 4; $i++) {
    $matriz[] = readline(); // Lê cada linha da matriz
}

$valores = [];
for ($i = 0; $i < strlen($matriz[0]); $i++) {
    // Calcula o valor numérico de cada coluna combinando os dígitos das linhas correspondentes
    $valor = intval($matriz[0][$i]) * 1000;
    $valor += intval($matriz[1][$i]) * 100;
    $valor += intval($matriz[2][$i]) * 10;
    $valor += intval($matriz[3][$i]);
    $valores[] = $valor;
}

for ($i = 1; $i < count($valores) - 1; $i++) {
    // Calcula o valor ASCII de cada elemento da saída
    echo chr(($valores[0] * $valores[$i] + $valores[count($valores) - 1]) % 257);
}
echo "\n"; // Imprime uma nova linha no final
?>
