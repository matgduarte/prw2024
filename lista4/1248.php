<?php

function insertionSort(&$array, $length) {
    for ($i = 1; $i < $length; ++$i) {
        $tmp = $array[$i];
        $j = $i - 1;
        while ($j >= 0 && $tmp < $array[$j]) {
            $array[$j + 1] = $array[$j];
            --$j;
        }
        $array[$j + 1] = $tmp;
    }
}

$casos = intval(fgets(STDIN)); // Lê o número de casos

for ($indice = 0; $indice < $casos; ++$indice) {
    $deveComer = array_fill(0, 26, 1); // Array para marcar se cada letra deve ser comida
    $estaNaDieta = array_fill(0, 26, 0); // Array para marcar se cada letra está na dieta

    $dieta = rtrim(fgets(STDIN), "\n"); // Lê a dieta
    $tamanhoDieta = strlen($dieta); // Obtém o tamanho da dieta

    $jaComido = rtrim(fgets(STDIN), "\n"); // Lê o que já foi comido
    $tamanhoJaComido = strlen($jaComido); // Obtém o tamanho do que já foi comido

    $jaComido .= rtrim(fgets(STDIN), "\n"); // Lê o que foi comido no dia
    $tamanhoJaComido = strlen($jaComido); // Obtém o novo tamanho do que já foi comido

    // Marca as letras da dieta que estão presentes
    for ($i = 0; $i < $tamanhoDieta; ++$i) {
        $estaNaDieta[ord($dieta[$i]) - ord('A')] = 1;
    }

    $trapaceiro = 0; // Variável para indicar se o indivíduo está trapaceando
    for ($i = 0; $i < $tamanhoJaComido && !$trapaceiro; ++$i) {
        $indiceLetra = ord($jaComido[$i]) - ord('A');

        // Verifica se a letra não está na dieta ou se já foi marcada como comida anteriormente
        if (!($estaNaDieta[$indiceLetra] && $deveComer[$indiceLetra])) {
            $trapaceiro = 1; // Define que o indivíduo está trapaceando
        } else {
            $deveComer[$indiceLetra] = 0; // Marca a letra como comida
        }
    }

    // Se o indivíduo está trapaceando, imprime "CHEATER"
    if ($trapaceiro) {
        echo "CHEATER\n";
    } else {
        insertionSort($dieta, $tamanhoDieta); // Ordena a dieta

        $jantar = "";
        // Constrói o jantar apenas com as letras que devem ser comidas
        for ($i = 0; $i < $tamanhoDieta; ++$i) {
            if ($deveComer[ord($dieta[$i]) - ord('A')]) {
                $jantar .= $dieta[$i];
            }
        }

        echo $jantar . "\n"; // Imprime o jantar
    }
}

?>
