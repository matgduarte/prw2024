<?php
function verificarSobrenome($sobrenome) {
    $padrao = '/[^aeiouAEIOU]{3}/';
    if (preg_match($padrao, $sobrenome)) {
        return "$sobrenome nao eh facil";
    } else {
        return "$sobrenome eh facil";
    }
}

$quantidadeCasos = intval(fgets(STDIN));

for ($indice = 0; $indice < $quantidadeCasos; $indice++) {
    $sobrenome = trim(fgets(STDIN)); 
    echo verificarSobrenome($sobrenome) . "\n"; 
}
?>
