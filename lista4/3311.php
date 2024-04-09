<?php

function ordenarFichas($fichas) {
    $porLetra = [];
    $ordenado = [];
    foreach ($fichas as $ficha) {
        $letra = substr($ficha, 0, 1);
        $porLetra[$letra][] = $ficha;
    }
    ksort($porLetra);
    foreach ($porLetra as $letra => $nomes) {
        foreach ($nomes as $nome) {
            $ordenado[] = $nome;
        }
    }
    return $ordenado;
}

$entrada = explode(" ", readline());
$quantidadeFichas = intval($entrada[0]);

$fichas = [];
for ($indice = 0; $indice < $quantidadeFichas; $indice++) {
    $ficha = readline();
    $fichas[] = $ficha;
}

$fichasOrdenadas = ordenarFichas($fichas);
foreach ($fichasOrdenadas as $nome) {
    echo $nome . "\n";
}
?>
