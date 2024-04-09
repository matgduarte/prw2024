<?php
while (fscanf(STDIN, "%d%d%d", $numeroParagrafos, $linhasPorPagina, $caracteresPorLinha) !== false) {
    $texto = fgets(STDIN); // Lê o texto

    $tamanhoTexto = strlen($texto) - 1; // Obtém o tamanho do texto

    $caracteres = $pontoVerificacao = 0;
    $linhas = $paginas = 1;

    for ($i = 0; $i < $tamanhoTexto; ++$i) {
        if ($i && $texto[$i - 1] == ' ') {
            $pontoVerificacao = $i;
        }

        if ($caracteres == $caracteresPorLinha) {
            ++$linhas;
            if ($texto[$i] == ' ') {
                $caracteres = 0;
            } else {
                $caracteres = $i - $pontoVerificacao + 1;
            }
        } else {
            ++$caracteres;
        }
    }

    $paginas = ceil($linhas / $linhasPorPagina); // Calcula o número de páginas
    printf("%d\n", $paginas); // Imprime o número de páginas
}
?>
