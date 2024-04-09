<?php
$tamanho = intval(readline());
$entradaTeto = explode(" ", readline());
$entradaChao = explode(" ", readline());
$mudancas = ['-1' => $entradaChao, '1' => $entradaTeto];
$mudaTeto = 0;
$mudaChao = 0;
$posicao = 1;
for ($indice = 0; $indice < $tamanho; $indice++) {
    if ($mudancas[$posicao][$indice] == 0) {
        $mudaTeto++;
        $posicao *= -1;
    } elseif ($indice != 0) {
        if ($mudancas[$posicao][$indice] > $mudancas[$posicao][$indice - 1]) {
            $mudaTeto++;
            $posicao *= -1;
        }
    }
}
$posicao = -1;
for ($indice = 0; $indice < $tamanho; $indice++) {
    if ($mudancas[$posicao][$indice] == 0) {
        $mudaChao++;
        $posicao *= -1;
    } elseif ($indice != 0) {
        if ($mudancas[$posicao][$indice] > $mudancas[$posicao][$indice - 1]) {
            $mudaChao++;
            $posicao *= -1;
        }
    }
}
if ($mudaChao > $mudaTeto)
    echo "$mudaTeto\n";
else
    echo "$mudaChao\n";
?>
