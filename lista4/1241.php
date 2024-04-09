<?php
$quantidade = intval(trim(fgets(STDIN)));

while($quantidade > 0){
    $contador = 0;
    $entrada = explode(' ', trim(fgets(STDIN)));
    $primeiraPalavra = strrev($entrada[0]);
    $segundaPalavra =  strrev($entrada[1]);
    $comprimentoPrimeira = strlen($primeiraPalavra);
    $comprimentoSegunda = strlen($segundaPalavra);

    if($comprimentoPrimeira >= $comprimentoSegunda){
        for($indice = 0; $indice < $comprimentoPrimeira; $indice++){
            if($primeiraPalavra[$indice] == $segundaPalavra[$indice]){
                $contador++;
            }else{
                $indice++;
            }
        }
    }
    if($contador == $comprimentoSegunda){
        echo "encaixa" . PHP_EOL;
    }else{
        echo "nao encaixa" . PHP_EOL;
    }
    $quantidade--;
}
?>
