<?php
while (true) {
    $N = intval(readline());
    if ($N == 0)
        break;
    $matriz = array_fill(0, $N, array_fill(0, $N, 'O')); // Inicializa a matriz com 'O's
    $direcoes = array(
        array(0, -1), // Esquerda
        array(-1, 0), // Cima
        array(0, 1),  // Direita
        array(1, 0)   // Baixo
    );
    $direcao_atual = 2; // Começa indo para a direita
    $posicaoX = intval($N / 2);
    $posicaoY = intval($N / 2);
    $passou = [];
    // Exibe a matriz
    for ($c = 0; $c < $N * $N; $c++) {
        $matriz[$posicaoX][$posicaoY] = 'X';
        // Exibe a matriz
        foreach ($matriz as $linha) {
            echo implode("", $linha) . "\n";
        }
        array_push($passou, strval($posicaoX) . " " . strval($posicaoY));
        $matriz[$posicaoX][$posicaoY] = 'O';
        // Calcula a próxima posição
        if ($c == 0) {
            $posicaoX += $direcoes[$direcao_atual][0];
            $posicaoY += $direcoes[$direcao_atual][1];
        } else {
            if ($direcao_atual == 2)
                if (in_array(strval($posicaoX) . " " . strval($posicaoY), $passou) && !in_array(strval($posicaoX + $direcoes[1][0]) . " " . strval($posicaoY + $direcoes[1][1]), $passou)) {
                    $direcao_atual = 1;
                    $posicaoX += $direcoes[$direcao_atual][0];
                    $posicaoY += $direcoes[$direcao_atual][1];
                } else {
                    $posicaoX += $direcoes[$direcao_atual][0];
                    $posicaoY += $direcoes[$direcao_atual][1];
                }
            elseif ($direcao_atual == 1)
                if (in_array(strval($posicaoX) . " " . strval($posicaoY), $passou) && !in_array(strval($posicaoX + $direcoes[0][0]) . " " . strval($posicaoY + $direcoes[0][1]), $passou)) {
                    $direcao_atual = 0;
                    $posicaoX += $direcoes[$direcao_atual][0];
                    $posicaoY += $direcoes[$direcao_atual][1];
                } else {
                    $posicaoX += $direcoes[$direcao_atual][0];
                    $posicaoY += $direcoes[$direcao_atual][1];
                }
            elseif ($direcao_atual == 0)
                if (in_array(strval($posicaoX) . " " . strval($posicaoY), $passou) && !in_array(strval($posicaoX + $direcoes[3][0]) . " " . strval($posicaoY + $direcoes[3][1]), $passou)) {
                    $direcao_atual = 3;
                    $posicaoX += $direcoes[$direcao_atual][0];
                    $posicaoY += $direcoes[$direcao_atual][1];
                } else {
                    $posicaoX += $direcoes[$direcao_atual][0];
                    $posicaoY += $direcoes[$direcao_atual][1];
                }
            elseif ($direcao_atual == 3)
                if (in_array(strval($posicaoX) . " " . strval($posicaoY), $passou) && !in_array(strval($posicaoX + $direcoes[2][0]) . " " . strval($posicaoY + $direcoes[2][1]), $passou)) {
                    $direcao_atual = 2;
                    $posicaoX += $direcoes[$direcao_atual][0];
                    $posicaoY += $direcoes[$direcao_atual][1];
                } else {
                    $posicaoX += $direcoes[$direcao_atual][0];
                    $posicaoY += $direcoes[$direcao_atual][1];
                }
        }
        echo "@\n";
    }
}
