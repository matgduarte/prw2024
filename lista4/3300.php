<?php
function verificaMalaSorte($numero) {
    $numeroString = strval($numero);
    for ($indice = 0; $indice < strlen($numeroString) - 1; $indice++) {
        if ($numeroString[$indice] == '1' && $numeroString[$indice + 1] == '3') {
            return true;
        }
    }
    return false;
}

$entrada = strval(readline());

if (verificaMalaSorte($entrada)) {
    echo "$entrada es de Mala Suerte\n";
} else {
    echo "$entrada NO es de Mala Suerte\n";
}
?>
