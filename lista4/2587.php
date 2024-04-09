<?php

function saoIguais($palavra, $padrao) {
    for ($i = 0; $i < strlen($padrao); $i++) {
        if ($padrao[$i] == '_') continue;
        if ($palavra[$i] != $padrao[$i]) return false;
    }
    return true;
}

$iteracoes = intval(trim(fgets(STDIN)));

for ($indice = 0; $indice < $iteracoes; $indice++) {
    $palavraA = trim(fgets(STDIN));
    $palavraB = trim(fgets(STDIN));
    $padrao = trim(fgets(STDIN));
    
    $a1 = $palavraA[strpos($padrao, '_')];
    $a2 = $palavraA[strrpos($padrao, '_')];
    $b1 = $palavraB[strpos($padrao, '_')];
    $b2 = $palavraB[strrpos($padrao, '_')];
    
    if (saoIguais($palavraA, $padrao) && saoIguais($palavraB, $padrao)) {
        echo ($palavraA == $palavraB || ($a2 == $b1 || $a1 == $b2)) ? "Y\n" : "N\n";
    } else {
        echo "Y\n";
    }
}

?>
